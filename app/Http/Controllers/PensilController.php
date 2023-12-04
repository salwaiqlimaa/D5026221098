<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PensilController extends Controller
{
	public function index()
	{
    	// mengambil data dari table pegawai
		// $pegawai = DB::table('pegawai')->get();
        $pegawai = DB::table('pensil')->paginate(10);
 
    	// mengirim data pegawai ke view index
		return view('index',['pensil' => $pensil]);
 
	}
 
	// method untuk menampilkan view form tambah pegawai
	public function tambah()
	{
 
		// memanggil view tambah
		return view('tambah');
 
	}
 
	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('pensil')->insert([
			'kodepensil' => $request->kode,
			'merkpensil' => $request->merk,
			'stockpensil' => $request->stock,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/pensil');
 
	}
 
	// method untuk edit data pegawai
	public function edit($kode)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$pegawai = DB::table('pensil')->where('kodepensil',$kode)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('edit',['pensil' => $pensil]);
        //kalau return view harus ngelakuin 2 perintah, redirect lebih ringkas
 
	}
 
	// update data pegawai
	public function update(Request $request)
	{
		// update data pegawai
		DB::table('pensil')->where('kodepensil',$request->kode)->update([
			'kodepensil' => $request->kode,
			'merkpensil' => $request->merk,
			'stockpensil' => $request->stock,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/pensil');
        //alasan knp ngga return view: redirect lebih ringkas: ngelempar ke suatu url route
	}
 
	// method untuk hapus data pegawai
	public function hapus($kode)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('pensil')->where('kodepensil',$kode)->delete();
		
		// alihkan halaman ke halaman pegawai
		return redirect('/pensil');
	}
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$pensil = DB::table('pensil')
		->where('merkpensil','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data pegawai ke view index
		return view('index',['pensil' => $pensil]);
 
	}
	public function view($kode)
	{
		//ambil data table pegawai sesuai id
		$pensil = DB::table('pensil')
		->where('kodepensil', $kode)
		->get();

		return view ('view',['pensil' => $pensil]);
	}
}
