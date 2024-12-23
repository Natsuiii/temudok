<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function tutorial(){
        return view('home.tutorial');
    }

    public function dashboard()
    {
        $countPending = Appointment::where('status_id', 3)->where('doctor_id', Auth::user()->id)->count();
        $countDone = Appointment::where('status_id', 1)->where('doctor_id', Auth::user()->id)->count();
        $countCancel = Appointment::where('status_id', 2)->where('doctor_id', Auth::user()->id)->count();
        $countUnpaid = Appointment::where('status_id', 4)->where('doctor_id', Auth::user()->id)->count();
        return view('dashboard.index2', [
            'countPending' => $countPending,
            'countDone' => $countDone,
            'countCancel' => $countCancel,
            'countUnpaid' => $countUnpaid
        ]);
    }
}
