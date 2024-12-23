<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home.index');
    }

    public function articles(){
        $categories = Category::all();
        $articles = Article::orderBy('created_at', 'desc')->with(['category', 'doctor'])->paginate(12);

        return view('home.article', compact(['categories', 'articles']));
    }

    public function details(Article $slug){        
        return view('home.detail', [
            'article' => $slug->with(['category', 'doctor'])->firstOrFail()
        ]);
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        // Fetch articles matching the query
        $articles = Article::where('title', 'LIKE', "%{$query}%")
            ->orWhere('content', 'LIKE', "%{$query}%")
            ->with('category')
            ->get();

        return view('home.search', compact('articles', 'query'));
    }

    public function tutorial(){
        return view('home.tutorial');
    }
}
