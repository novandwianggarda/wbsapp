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
Route::get('/tes', function (){
 return view('index');
});
Route::get('/', 'WbsController@index');
Route::get('/home', 'WbsController@home');
/*Route::get('/','HomeController@home');*/
Route::get('/lapor_korupsi', 'WbsController@home');
Route::get('/lapor_gratifikasi', 'WbsController@gratifikasi');
Route::get('/lapor_benturan_kepentingan', 'WbsController@benturan');
Route::get('/form', 'FormKorupsiController@create');
Route::resource('post_korupsi', 'FormKorupsiController');
Route::resource('post_gratifikasi', 'FormGratifikasiController');
Route::resource('post_benturan_kepentingan', 'FormBenturanController');

Route::get('/json', function(){
    return view('json');
});

Auth::routes();

/*Route::get('/home', 'HomeController@index');
Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');*/
//route admin
Route::prefix('admin')->group(function () {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

    //korupsi
    Route::get('/manage_korupsi', 'admin\ManageKorupsiController@showKorupsi')->name('manage.korupsi');
    //gratifikasi
    Route::get('/manage_gratifikasi', 'admin\ManageGratifikasiController@showGratifikasi')->name('manage.gratifikasi');
    //benturan kepentingan
    Route::get('/manage_benturan', 'admin\ManageBenturanController@showBenturan')->name('manage.benturan');
});


