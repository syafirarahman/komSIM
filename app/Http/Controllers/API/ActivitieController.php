<?php
namespace App\Http\Controllers\API;
use Illuminate\Http\Request; 
use App\Http\Controllers\Controller; 
use App\Activitie; 
use Illuminate\Support\Facades\Auth; 
use Validator;
class ActivitieController extends Controller 
{

        public function index(){
            return Activitie::all();
        }
        public function create(request $request){
                $activitie  = new Activitie;
                $activitie->name = $request->name;
                $activitie->date = $request->date;
                $activitie->time = $request->time;
                $activitie->location = $request->location;
                $activitie->description = $request->description;
                $activitie->save();

                return "Success Created activitie";
                return Redirect::route('login');
        }

    public function delete($id){
        $activitie = Activitie::find($id);
        $activitie -> delete();
        return "Success deleted activitie";
        return Redirect::route('login');
    }
    public function edit(Request $request, $id)
    {
        $activitie = Activitie::find($id);
        $activitie->update($request->all());
        return "Success updated activitie";
        return Redirect::route('login');

    }
    public function detail($id)
    {
        $activitie   = Activitie::findOrFail($id);
        $response=[
            'status'=>'success',
            'data' => $activitie,
        ];
        return response()->json($response, 200);
        return Redirect::route('login');
    }
   
}