<?php
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//      return $request->user();


//Route User
Route::post('login', 'API\UserController@login');
Route::post('register', 'API\UserController@register');
//Route::post('details', 'API\UserController@details');

//Auth

    //Route User
		Route::get('users','API\UserController@index');
		//update kucuali password
		Route::put('/updateUser/{id}','API\UserController@edit');
		Route::post('detailUser', 'API\UserController@details');
		Route::delete('/deleteUser/{id}','API\UserController@delete');
	//Route Activitie
		Route::post('createActivitie', 'API\ActivitieController@create');
		Route::get('activities','API\ActivitieController@index');
		Route::put('updateActivitie/{id}','API\ActivitieController@edit');
		Route::delete('/deleteActivitie/{id}','API\ActivitieController@delete');
		Route::get('detailActivitie/{id}', 'API\ActivitieController@detail');
	//Route Folder
		Route::post('createFolder', 'API\FolderController@create');
		Route::get('folders','API\FolderController@index');
		Route::put('updateFolder/{id}','API\FolderController@edit');
		Route::delete('/deleteFolder/{id}','API\FolderController@delete');
		Route::post('detailFolder/{id}', 'API\FolderController@detail');
	//Route File
		Route::post('createFile', 'API\FileController@create');
		Route::get('files','API\FileController@index');
		Route::put('updateFile/{id}','API\FileController@edit');
		Route::delete('/deleteFile/{id}','API\FileController@delete');
		Route::post('detailFile/{id}', 'API\FileController@detail');
		Route::post('uploadFile', 'API\FileController@upload');
	//Route Tag
		Route::post('createTag', 'API\TagController@create');
		Route::get('tags','API\TagController@index');
		Route::delete('/deleteTag/{id}','API\TagController@delete');
		Route::post('detailTag/{id}', 'API\TagController@detail');

//Route::group(['middleware' => 'auth:api'], function(){

	
//});