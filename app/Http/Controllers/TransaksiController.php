<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    public function index()
    {
    	// mengambil data dari table kendaraan
    	$transaksi = DB::table('transaksi_pencucian')->get();
 
    	// mengirim data kendaraan ke view index
    	return view('transaksi',['transaksi' => $transaksi]);
 
    }

	public function tambah1()
    {
		$kendaraan = DB::table('kendaraan')->get();
		$metode = DB::table('metode_pembayaran')->get();

    	return view('tambahtransaksi',['metode' => $metode,'kendaraan' => $kendaraan]);

    }

	public function input(Request $request)
	{
		
			// insert data ke table transaksi
	DB::table('transaksi_pencucian')->insert([
		'statuspembayaran' => $request->statuspembayaran,
		'nominalbayar' => $request->nominalbayar,
		'tanggal_transaksi' => $request->tanggal_transaksi,
		'id_metode' => $request->id_metode,
		'id_kendaraan' => $request->id_kendaraan
	]);
	// alihkan halaman ke halaman transaksi
	return redirect('/transaksi');
	}

	public function edit( $id)
	{
		$kendaraan = DB::table('kendaraan')->get();
		$metode = DB::table('metode_pembayaran')->get();
		// mengambil data pegawai berdasarkan id yang dipilih
	$transaksi = DB::table('transaksi_pencucian')->where('id_transaksibayar',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('updatetransaksi',['transaksi' => $transaksi,'metode' => $metode,'kendaraan' => $kendaraan]);
	}

	public function update(Request $request)
	{
			// update data ke table pegawai
	DB::table('transaksi_pencucian')->where('id_transaksibayar',$request->id_transaksibayar)->update([
		'statuspembayaran' => $request->statuspembayaran,
		'nominalbayar' => $request->nominalbayar,
		'tanggal_transaksi' => $request->tanggal_transaksi,
		'id_metode' => $request->id_metode,
		'id_kendaraan' => $request->id_kendaraan
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/transaksi');
	}

	public function hapus($id)
	{
			// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('transaksi_pencucian')->where('id_transaksibayar',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
	return redirect('/transaksi');
	}
}
