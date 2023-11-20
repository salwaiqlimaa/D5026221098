<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
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
Route::get('/hello', function () {
    return view('hello');
});
Route::get('/index2', function () {
    return view('index2');
});
Route::get('/js1', function () {
    return view('js1');
});
Route::get('/js1', function () {
    return view('js1');
});
Route::get('/js2', function () {
    return view('js2');
});
Route::get('/latihan1', function () {
    return view('latihan1');
});
Route::get('/latihan1-fix', function () {
    return view('latihan1-fix');
});
Route::get('/latihan1 - Copy', function () {
    return view('latihan1 - Copy');
});
Route::get('/link', function () {
    return view('link');
});
Route::get('/oxfordsocietyshop', function () {
    return view('oxfordsocietyshop');
});
Route::get('/responsive', function () {
    return view('responsive');
});
Route::get('/style', function () {
    return view('style');
});
Route::get('/validasi1', function () {
    return view('validasi1');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('perkalian','App\Http\Controllers\DosenController@index');
Route::get('show','App\Http\Controllers\DosenController@showBlog');

//route CRUDphp
Route::get('/pegawai','App\Http\Controllers\DosenController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\DosenController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\DosenController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\DosenController@edit');
Route::post('/pegawai/update','App\Http\Controllers\DosenController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\DosenController@hapus');
