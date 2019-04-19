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
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.index');
    }

    public function portfolio()
    {
        return view('pages.portfolio');
    }

    public function price()
    {
        return view('pages.price');
    }

    public function tutorial()
    {
        return view('pages.tutorial');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
