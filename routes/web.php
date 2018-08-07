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

Route::get('/wbs', 'WbsController@index');
/*Route::get('/','HomeController@home');*/
Route::get('/lapor_korupsi', 'KorupsiController@laporKorupsi');
Route::get('/lapor_gratifikasi', 'GratifikasiController@laporGratifikasi');
Route::get('/lapor_benturan_kepentingan', 'BenturanKepentinganController@laporBenturan');
Route::get('/form', 'FormKorupsiController@create');

Route::resource('post_korupsi', 'FormKorupsiController');
Route::resource('post_gratifikasi', 'FormGratifikasiController');
Route::resource('post_benturan_kepentingan', 'FormBenturanController');


Auth::routes();

/*Route::get('/home', 'HomeController@index');
Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');*/
//route admin
Route::prefix('admin')->group(function () {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'admin\GetKorupsiController@index')->name('admin.dashboard');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
});


