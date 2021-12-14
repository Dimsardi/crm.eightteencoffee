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
        return view('user.home');
    }
    
    public function adminHome()
    {
        return view('home.admin');
    }

    public function kasirHome()
    {
        return view('home.kasir');
    }

    public function weatherHome()
    {
        return view('home.weather');
    }
    public function kichenHome()
    {
        return view('home.kichen');
    }    

    public function baristaHome()
    {
        return view('home.barista');
    }
}
