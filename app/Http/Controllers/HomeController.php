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
        return view('user.userlanding');
    }

    public function log()
    {
        return view('user.userLog');
    }

    public function ubahPassword()
    {
        return view('user.userUbahPassword');
    }

}
