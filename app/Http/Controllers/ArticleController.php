<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        return view('article.create');
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
        ]);

        $slug = Str::slug($request->title);

        $counter = Article::where('slug', 'like', $slug . '%')->count();

        // Jika slug sudah ada, tambah angka di belakang slug
        if ($counter > 0) {
            $slug = $slug . '-' . ($counter + 1);
        }

        Article::create([
            'doctor_id' => Auth::user()->id,
            'category_id' => rand(1, 10),
            'title' => $request->title,
            'slug' => $slug,
            'content' => $request->content,
            'category' => $request->category,
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
        ]);

        $slug = Str::slug($request->title);

        $counter = Article::where('slug', 'like', $slug . '%')->count();

        // Jika slug sudah ada, tambah angka di belakang slug
        if ($counter > 0) {
            $slug = $slug . '-' . ($counter + 1);
        }

        $article->update([
            'title' => $request->title,
            'slug' => $slug,
            'content' => $request->content,
            'category' => rand(1, 10),
        ]);

        return redirect()->route('article.index')->with('success', 'Article updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();
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

            // Kirim pesan sukses
            return back()->with('success', 'Articles deleted successfully.');
        } catch (ValidationException $e) {  
            // Tangkap error validasi dan kirim pesan error
            return back()->withErrors($e->validator)->withInput();
        }
    }
}
