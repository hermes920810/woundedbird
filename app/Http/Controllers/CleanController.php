<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CleanController extends Controller
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
     * Show the application home.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function blogs()
    {
        return view('blogs');
    }

    public function services()
    {
        return view('services');
    }

    public function contact_us()
    {
        return view('contact-us');
    }

    public function portfolios()
    {
        return view('portfolios');
    }

    public function team_member()
    {
        return view('team-member');
    }

    public function gallery()
    {
        return view('gallery');
    }
}
