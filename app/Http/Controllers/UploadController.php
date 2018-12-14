<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Upload;

class UploadController extends Controller
{
    //
	public function create()
	{
		return view('uploads.create'); // view create.php di folder uploads
	}

	public function store(Request $request)
	{
		$this->validate($request, [
			'name' => 'required',
			'image' => 'required|mimes:jpeg,png,jpg',
			'file' => 'required|mimes:pdf,doc,docx',
		]);

		$input = $request->all();

		$imageName = '';
		if ($request->hasFile('image')) {
			$imageExtension = $request->file('image')->getClientOriginalExtension();
			$imageName = 'image_'.time().'.'.$imageExtension; // pengaturan nama gambar
			$imageDestination = base_path() . '/public/uploads';
			$request->file('image')->move($imageDestination, $imageName);
			$input['image'] = $imageName; // rename file --> penamaan gambar di db sesuai dengan nama gambar yang diinputkan
		}

		$fileName = '';
		if ($request->hasFile('file')) {
			$fileExtension = $request->file('file')->getClientOriginalExtension();
			$fileName = 'file_'.time().'.'.$fileExtension;
			$fileDestination = base_path() . '/public/uploads'; //destinasi penyimpanan
			$request->file('file')->move($fileDestination, $fileName);
			$input['file'] = $fileName;
		}

		$upload = Upload::create($input); // function insert
		return redirect()->route('upload.index')
		->with('success','Image/file successfully added');
	}

	// Untuk menampilkan semua daftar upload
	public function index(Request $request) {
		$uploads = Upload::orderBy('id','DESC')->paginate(5); // per page ada 5 baris
		return view('uploads.index',compact('uploads'))
			->with('i', ($request->input('page', 1) - 1) * 5);
	}
}
