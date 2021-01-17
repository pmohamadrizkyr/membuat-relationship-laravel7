<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
//kalo mau masuk daftar, tabel, blog karyawan harus login dulu
// Route::get('/daftar-karyawan', 'DataController@daftarKaryawan')->middleware('auth');
// Route::get('/tabel-karyawan', 'DataController@tabelKaryawan')->middleware('auth');
// Route::get('/blog-karyawan', 'DataController@blogKaryawan')->middleware('auth');

//Langsung resource aja
Route::resource('/karyawans', 'KaryawanController');
Route::get('/', 'BagianController@index')->middleware('auth');
Route::resource('/bagians', 'BagianController')->middleware('auth');
Route::get('/bagians/{bagian}', 'BagianController@show')->name('bagian.show')->middleware('auth')->middleware('can:view,bagian');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
