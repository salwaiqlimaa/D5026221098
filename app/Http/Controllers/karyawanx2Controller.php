<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class karyawanx2Controller extends Controller
{
	public function index()
	{
    	// mengambil data dari table pensil
		// $pensil = DB::table('pensil')->get();
        $karyawanx2 = DB::table('karyawanx2')->paginate(10);
 
    	// // mengirim data pegawai ke view index
		return view('indexkaryawanx2',['karyawanx2' => $karyawanx2]);
 
	}
 
	// method untuk menampilkan view form tambah pegawai
	public function tambah()
	{
 
		// memanggil view tambah
		return view('tambahkaryawanx2');
 
	}
 
	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('karyawanx2')->insert([
			'kodekaryawan' => $request->kode,
			'namalengkap' => $request->nama,
			'divisi' => $request->divisi,
			'departemen' => $request->departemen
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/karyawanx2');
 
	}
 
	// method untuk edit data pegawai
	public function edit($kode)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$karyawanx2 = DB::table('karyawanx2')->where('kodekaryawan',$kode)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('editkaryawanx2',['karyawanx2' => $karyawanx2]);
        //kalau return view harus ngelakuin 2 perintah, redirect lebih ringkas
 
	}
 
	// update data pegawai
	public function update(Request $request)
	{
		// update data pegawai
		DB::table('karyawanx2')->where('kodekaryawan',$request->kode)->update([
			'kodekaryawan' => $request->kode,
			'namalengkap' => $request->nama,
			'divisi' => $request->divisi,
			'departemen' => $request->departemen
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/karyawanx2');
        //alasan knp ngga return view: redirect lebih ringkas: ngelempar ke suatu url route
	}
 
	// method untuk hapus data pegawai
	public function hapus($kode)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('karyawanx2')->where('kodekaryawan',$kode)->delete();
		
		// alihkan halaman ke halaman pegawai
		return redirect('/karyawanx2');
	}
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$karyawanx2 = DB::table('karyawanx2')
		->where('namalengkap','like',"%".$cari."%")
		->paginate();
 
    	// mengirim data pegawai ke view index
		return view('indexkaryawanx2',['karyawanx2' => $karyawanx2]);
 
	}
	public function view($kode)
	{
		//ambil data table pegawai sesuai id
		$karyawanx2 = DB::table('karyawanx2')
		->where('kodekaryawan', $kode)
		->get();

		return view ('viewkaryawanx2',['karyawanx2' => $karyawanx2]);
	}
}
