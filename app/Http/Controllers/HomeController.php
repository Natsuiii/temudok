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
        $category = Category::with(['doctors.articles'])->get();

        return view('home.article', compact('category'));
    }

    public function details($category_id, $article_id){
        $article = Article::find($article_id);
        
        return view('home.detail')->with('article', $article);
    }

    public function tutorial(){
        return view('home.tutorial');
    }
}
