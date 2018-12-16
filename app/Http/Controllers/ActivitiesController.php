<?php

namespace App\Http\Controllers;
use App\Activitie;
use App\Admin;
use App\Tag;

use Illuminate\Http\Request;

class ActivitiesController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|max:10',
            'time' => 'required',
            'date' => 'required',
            'location' => 'required',
            'description' => 'required',
        ]);

        $emps = new Activitie;

        $emps->name = $request->input('name');
        $emps->time = $request->input('time');
        $emps->date = $request->input('date');
        $emps->location = $request->input('location');
        $emps->description = $request->input('description');

        $emps->save();

         return redirect('admin')->with('success', 'Kegiatan berhasil dibuat !');
        
       
    }
}
