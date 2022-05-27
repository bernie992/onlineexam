<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function user()
    {
        return view('user');
    }

    public function question()
    {
        return view('question');
    }

    public function view_exam()
    {
        return view('view_exam');
    }

    public function view_result()
    {
        return view('view_result');
    }
}
