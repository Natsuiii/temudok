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

    public function details($category_id, $article_id){
        $article = Article::find($article_id);
        
        return view('home.detail')->with('article', $article);
    }

    public function tutorial(){
        return view('home.tutorial');
    }
}
