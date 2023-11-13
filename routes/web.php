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
Route::get('/hello', function () {
    return view('hello');
});
Route::get('/index', function () {
    return view('index');
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

Route::get('/pegawai/{nama}', 'App\Http\Controllers\DosenController@shownama');

Route::get('/formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');//kalau datanya secure pake post

Route::get('/blog', 'App\Http\Controllers\BlogController@home');
Route::get('/blog/tentang', 'App\Http\Controllers\BlogController@tentang');
Route::get('/blog/kontak', 'App\Http\Controllers\BlogController@kontak');

