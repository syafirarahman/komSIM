<?php
namespace App\Http\Controllers\API;
use Illuminate\Http\Request; 
use App\Http\Controllers\Controller; 
use App\Folder; 
use Illuminate\Support\Facades\Auth; 
use Validator;
class FolderController extends Controller 
{

        public function index(){
            return Folder::all();
        }
        public function create(request $request){
                $folder  = new Folder;
                $folder->name = $request->name;
                $folder->parent_id = $request->parent_id;
                $folder->save();

                return "Success Created folder";
        }

    public function delete($id){
        $folder = Folder::find($id);
        $folder -> delete();
        return "Success deleted folder";
    }
    public function edit(Request $request, $id)
    {
        $folder = Folder::find($id);
        $folder->update($request->all());
        return "Success updated folder";

    }
    public function detail($id)
    {
        $folder   = Folder::findOrFail($id);
        $response=[
            'status'=>'success',
            'data' => $folder,
        ];
        return response()->json($response, 200);
    }
   
}