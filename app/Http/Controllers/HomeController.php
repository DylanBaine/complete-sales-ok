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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $home = \App\HomePage::where('id', 1)->first();
        $seo = \App\Seo::where('id', 1)->first();

        return view('auth.home', compact('home', 'seo'));
    }
}
