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


Route::get('/', function () {
    return view('auth.login');
})->middleware('guest');

Auth::routes();

Route::middleware(['auth','ceklevel:kaprodi'])->group(function () {
    Route::resource('/absen', 'DashboardController');
    Route::resource('/user', 'UserController');

    Route::get('/guru', 'GuruController@index');
    Route::resource('/izin', 'IzinController');
    Route::resource('/profile', 'ProfileController');
});


Route::middleware(['auth','ceklevel:admin'])->group(function () {
    Route::resource('/absen', 'DashboardController');
    Route::resource('/user', 'UserController');
    Route::get('/guru', 'GuruController@index');

    Route::resource('/profile', 'ProfileController');
});

Route::middleware(['auth','ceklevel:siswa'])->group(function () {
    Route::resource('/absen', 'DashboardController');
    Route::resource('/izin', 'IzinController');
    Route::resource('/profile', 'ProfileController');

});

Route::resource('/mapel', 'MapelController');
Route::resource('/kelas', 'KelasController');
Route::resource('/siswa', 'SiswaController');
Route::resource('/jurusan', 'JurusanController');
    