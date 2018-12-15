<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Folder;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Folder::all();
        return view('admin.admin',compact('data'));
    }

    public function log()
    {
        return view('admin.adminLog');
    }

    public function member()
    {
        return view('admin.adminMember');
    }

    public function ubahPassword()
    {
        return view('admin.adminUbahPassword');
    }

    public function aktifitas()
    {
        return view('admin.adminActivity');
    }

}
