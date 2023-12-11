<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class shoppingchartController extends Controller
{
	public function index()
	{
    	// mengambil data dari table pensil
		// $pensil = DB::table('pensil')->get();
        $shoppingchart = DB::table('shoppingchart')->paginate(10);
 
    	// // mengirim data pegawai ke view index
		return view('indexshoppingchart',['shoppingchart' => $shoppingchart]);
 
	}
 
	// method untuk menampilkan view form tambah pegawai
	public function tambah()
	{
 
		// memanggil view tambah
		return view('tambahshoppingchart');
 
	}
 
	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('shoppingchart')->insert([
			'id' => $request->id,
			'KodeBarang' => $request->kode,
			'Jumlah' => $request->jumlah,
			'Harga' => $request->harga
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/shoppingchart');
 
	}
 
	// update data pegawai
	public function update(Request $request)
	{
		// update data pegawai
		DB::table('shoppingchart')->where('id',$request->id)->update([
			'id' => $request->id,
			'KodeBarang' => $request->kode,
			'Jumlah' => $request->jumlah,
			'Harga' => $request->harga
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/shoppingchart');
        //alasan knp ngga return view: redirect lebih ringkas: ngelempar ke suatu url route
	}
 
	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('shoppingchart')->where('id',$id)->delete();
		
		// alihkan halaman ke halaman pegawai
		return redirect('/shoppingchart');
	}
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$shoppingchart = DB::table('shoppingchart')
		->where('KodeBarang','like',"%".$cari."%")
		->paginate();
 
    	// mengirim data pegawai ke view index
		return view('indexshoppingchart',['shoppingchart' => $shoppingchart]);
 
	}
}
