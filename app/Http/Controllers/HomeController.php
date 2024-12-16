<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home.index');
    }

    public function articles(){
        return view('home.article');
    }

    public function tutorial(){
        return view('home.tutorial');
    }
}
