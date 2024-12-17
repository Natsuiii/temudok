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

    public function tutorial(){
        return view('home.tutorial');
    }
}
