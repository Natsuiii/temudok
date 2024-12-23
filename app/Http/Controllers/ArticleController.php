<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::where('doctor_id', Auth::user()->id)->with('doctor')->orderBy('created_at', 'desc')->get();
        return view('article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('article.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'category' => 'required',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg|max:4096',
        ]);

        

        $slug = Str::slug($request->title);

        $counter = Article::where('slug', 'like', $slug . '%')->count();

        // Jika slug sudah ada, tambah angka di belakang slug
        if ($counter > 0) {
            $slug = $slug . '-' . ($counter + 1);
        }

        $thumbnail = null;
        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail')->store('thumbnail', 'public');
        }

        Article::create([
            'doctor_id' => Auth::user()->id,
            'category_id' => $request->category,
            'title' => $request->title,
            'slug' => $slug,
            'content' => $request->content,
            'category' => $request->category,
            'thumbnail' => $thumbnail
        ]);

        return redirect()->route('article.create')->with('success', 'Article created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();
        return view('article.show', compact('article'));
    }

    public function edit($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();
        return view('article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'category' => 'required',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg|max:4096',
        ]);

        $slug = Str::slug($request->title);

        $counter = Article::where('slug', 'like', $slug . '%')->count();

        // Jika slug sudah ada, tambah angka di belakang slug
        if ($counter > 0) {
            $slug = $slug . '-' . ($counter + 1);
        }

        $thumbnail = null;
        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail')->store('thumbnail', 'public');
        }

        $article->update([
            'title' => $request->title,
            'slug' => $slug,
            'content' => $request->content,
            'category' => rand(1, 10),
            'thumbnail' => $thumbnail
        ]);

        return redirect()->route('article.index')->with('success', 'Article updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();
        if ($article->thumbnail) {
            Storage::disk('public')->delete($article->thumbnail);
        }
        return redirect()->route('article.index')->with('success', 'Article deleted successfully.');
    }

    public function bulkDestroy(Request $request)
    {
        try {
            // Validasi ID yang dipilih
            $request->validate([
                'ids' => 'required|min:1',
                'ids.*' => 'exists:unavailable_times,id',
            ], [
                'ids.required' => 'You must select at least one schedule to delete.',
                'ids.min' => 'Please ensure you select at least one schedule.',
                'ids.*.exists' => 'The selected schedule does not exist.',
            ]);
            
            $ids = explode(',', $request->ids);

            // Hapus semua jadwal yang dipilih
            Article::destroy($ids);

            // Hapus thumbnail dari semua jadwal yang dipilih
            foreach ($ids as $id) {
                $article = Article::find($id);
                if ($article->thumbnail) {
                    Storage::disk('public')->delete($article->thumbnail);
                }
            }

            // Kirim pesan sukses
            return back()->with('success', 'Articles deleted successfully.');
        } catch (ValidationException $e) {  
            // Tangkap error validasi dan kirim pesan error
            return back()->withErrors($e->validator)->withInput();
        }
    }
}
