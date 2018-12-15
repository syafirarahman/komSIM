<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () { // home
//     return view('welcome');
// });
Route::get('/', 'WelcomeController@index');

Auth::routes();

//route untuk user
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/log', 'HomeController@log')->name('userLog');
Route::get('/ubahPassword', 'HomeController@ubahPassword')->name('userUbahPassword');
Route::post('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::prefix('admin')->group(function() {
	// controller ada di Auth, nama file AdminLoginController, function showLoginForm
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/log', 'AdminController@log')->name('adminLog');
    Route::get('/aktifitas','AdminController@aktifitas')->name('adminAktifitas');
    Route::get('/pengguna', 'AdminController@member')->name('adminMember');
    Route::get('/ubahPassword', 'AdminController@ubahPassword')->name('adminUbahPassword');
    Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

    // Password reset routes
    Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
    Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');

    Route::resource('manageadmins', 'ManageAdminController');
});

Route::get('upload',['as'=>'upload.index','uses'=>'UploadController@index']);
// untuk menampilkan form nya.
Route::get('upload/create',['as'=>'upload.create','uses'=>'UploadController@create']);
// untuk memproses
Route::post('upload',['as'=>'upload.store','uses'=>'UploadController@store']);



