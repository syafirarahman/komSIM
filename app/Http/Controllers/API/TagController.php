<?php
namespace App\Http\Controllers\API;
use Illuminate\Http\Request; 
use App\Http\Controllers\Controller; 
use App\Tag; 
use Illuminate\Support\Facades\Auth; 
use Validator;
class TagController extends Controller 
{

        public function index(){
            return Tag::all();
        }
        public function create(request $request){
                $tag  = new Tag;
                $tag->name = $request->name;
                $tag->save();

                return "Success Created tag";
        }

    public function delete($id){
        $tag = Tag::find($id);
        $tag -> delete();
        return "Success deleted tag ";
    }
    
    public function detail($id)
    {
        $tag   = Tag::findOrFail($id);
        $response=[
            'status'=>'success',
            'data' => $tag,
        ];
        return response()->json($response, 200);
    }
   
}