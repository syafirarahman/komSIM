<?php
namespace App\Http\Controllers\API;
use Illuminate\Http\Request; 
use App\Http\Controllers\Controller; 
use App\File; 
use Illuminate\Support\Facades\Auth; 
use Validator;
class FileController extends Controller 
{

        public function index(){
            return File::all();
        }
        public function create(request $request){
                $file  = new File;
                $file->name = $request->name;
                $file->file = $request->file;
                $file->save();

                return "Success Created file";
        }

    public function delete($id){
        $file = File::find($id);
        $file -> delete();
        return "Success deleted file";
    }
     public function edit(Request $request, $id)
     {
         $file = File::find($id);
         $file->update($request->all());
         return "Success updated file";

     }

    // public function upload(Request $request){
    //     // $path = $request->file('file')->store('files');
    //     $path = Storage::putFileAs(
    // 'file', $request->file('file'), $request->user()->id
    // );

    //     return $path;
    // }
    
    public function detail($id)
    {
        $file   = File::findOrFail($id);
        $response=[
            'status'=>'success',
            'data' => $file,
        ];
        return response()->json($response, 200);
    }
   
}