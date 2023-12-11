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
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');

//route CRUDphp pensil
Route::get('/pensil','App\Http\Controllers\PensilController@index');
Route::get('/pensil/tambahpensil','App\Http\Controllers\PensilController@tambah');
Route::post('/pensil/store','App\Http\Controllers\PensilController@store');
Route::get('/pensil/edit/{kodepensil}','App\Http\Controllers\PensilController@edit');
Route::post('/pensil/update','App\Http\Controllers\PensilController@update');
Route::get('/pensil/hapus/{kodepensil}','App\Http\Controllers\PensilController@hapus');
Route::get('/pensil/view/{kodepensil}','App\Http\Controllers\PensilController@view');
Route::get('/pensil/cari','App\Http\Controllers\PensilController@cari');

//route CRUDphp nilaikuliah
Route::get('/nilaikuliah', 'App\Http\Controllers\nilaikuliahController@index');
Route::get('/nilaikuliah/tambahNilaikuliah', 'App\Http\Controllers\nilaikuliahController@tambah');
Route::post('/nilaikuliah/store', 'App\Http\Controllers\nilaikuliahController@store');

//route CRUDphp karyawanX2
Route::get('/karyawanx2', 'App\Http\Controllers\karyawanx2Controller@index');
Route::get('/karyawanx2/tambahkaryawanx2', 'App\Http\Controllers\karyawanx2Controller@tambah');
Route::post('/karyawanx2/store', 'App\Http\Controllers\karyawanx2Controller@store');
Route::post('/karyawanx2/update','App\Http\Controllers\karyawanx2Controller@update');
Route::get('/karyawanx2/hapuskaryawanx2/{kodekaryawan}','App\Http\Controllers\karyawanx2Controller@hapus');
Route::get('/karyawanx2/cari','App\Http\Controllers\karyawanx2Controller@cari');
Route::get('/karyawanx2/editkaryawanx2/{kodekaryawan}','App\Http\Controllers\karyawanx2Controller@edit');
Route::get('/karyawanx2/viewkaryawanx2/{kodekaryawan}','App\Http\Controllers\karyawanx2Controller@view');

//route CRUDphp countersoalx1
Route::get('/soalx1', 'App\Http\Controllers\soalx1Controller@index');
Route::post('/soalx1/store', 'App\Http\Controllers\soalx1Controller@store');
Route::post('/soalx1/update','App\Http\Controllers\soalx1Controller@update');

Route::get('/shoppingchart', 'App\Http\Controllers\shoppingchartController@index');
Route::get('/shoppingchart/tambahshoppingchart', 'App\Http\Controllers\shoppingchartController@tambah');
Route::post('/shoppingchart/store', 'App\Http\Controllers\shoppingchartController@store');
Route::post('/shoppingchart/update','App\Http\Controllers\shoppingchartController@update');
Route::get('/shoppingchart/hapusshoppingchart/{id}','App\Http\Controllers\shoppingchartController@hapus');

//route CRUDphp karyawan
Route::get('/karyawan', 'App\Http\Controllers\karyawanController@index');
Route::get('/karyawan/tambahkaryawan', 'App\Http\Controllers\karyawanController@tambah');
Route::post('/karyawan/store', 'App\Http\Controllers\karyawanController@store');
Route::post('/karyawan/update','App\Http\Controllers\karyawanController@update');
Route::get('/karyawan/hapuskaryawan/{kodepegawai}','App\Http\Controllers\karyawanController@hapus');