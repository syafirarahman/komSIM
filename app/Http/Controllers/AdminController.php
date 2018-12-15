<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Hash;

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
        return view('admin.admin');
    }

    public function log()
    {
        return view('admin.adminLog');
    }

    public function member(Request $request)
    {
        $users = User::orderBy('id','DESC')->paginate(5);
        return view('admin.adminMember',compact('users'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'nip' => 'required',
            'phone' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|same:confirm-password',
            ]);

            $input = $request->all();
            $input['password'] = Hash::make($input['password']);

            $user = User::create($input);

            return redirect('admin.adminMember')->with('success','User successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('manageadmins.show',compact('users'));
        // Untuk liat data dalam json
        //return compact('admin');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('manageadmins.edit',compact('users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'same:confirm-password',
        ]);
            $input = $request->all();
            if(!empty($input['password'])){
            $input['password'] = Hash::make($input['password']);
            }else{
            $input = array_except($input,array('password'));
            }

            $user = User::find($id);
            $user->update($input);
            return redirect()->route('manageadmins.index')->with('success','User successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return view('admin.adminMember',compact('users'))
            ->with('success','User successfully deleted'); 
    }

    public function ubahPassword()
    {
        return view('admin.adminUbahPassword');
    }

}
