<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class karyawanController extends Controller
{
    public function index()
    {
        // mengambil data dari table karyawan
        $karyawan = DB::table('karyawan')->paginate(10);

        // // mengirim data pegawai ke view index
        return view('indexkaryawan', ['karyawan' => $karyawan]);

    }

    // method untuk menampilkan view form tambah pegawai
    public function tambah()
    {

        // memanggil view tambah
        return view('tambahkaryawan');

    }

    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
    	// insert data ke table pegawai
    	DB::table('karyawan')->insert([
    		'kodepegawai' => $request->kodekaryawan,
    		'namalengkap' => $request->namakaryawan,
    		'divisi' => $request->divisikaryawan,
    		'departemen' => $request->departemenkaryawan
    	]);
    	// alihkan halaman ke halaman pegawai
    	return redirect('/karyawan');

    }

    public function update(Request $request)
    {
        // Validate the request data
        $request->validate([
            'kodekaryawan' => 'required',
            'namakaryawan' => 'required',
            'divisikaryawan' => 'required',
            'departemenkaryawan' => 'required',
        ]);

        // Update data if kodepegawai exists
        Karyawan::updateOrCreate(
            ['kodepegawai' => $request->kodekaryawan],
            [
                'namalengkap' => $request->namakaryawan,
                'divisi' => $request->divisikaryawan,
                'departemen' => $request->departemenkaryawan,
            ]
        );

        // Redirect to the Karyawan index page
        return redirect('/karyawan');
    }

    // method untuk hapus data pegawai
    public function hapus($kodekaryawan)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('karyawan')->where('kodepegawai', $kodekaryawan)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/karyawan');
    }
    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table pegawai sesuai pencarian data
        $karyawan = DB::table('karyawan')
            ->where('namalengkap', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data pegawai ke view index
        return view('indexkaryawan', ['karyawan' => $karyawan]);

    }
}