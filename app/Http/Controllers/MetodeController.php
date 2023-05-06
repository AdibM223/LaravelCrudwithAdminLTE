<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MetodeController extends Controller
{
    public function index()
    {
    	// mengambil data dari table metode_pembayaran
    	$metode = DB::table('metode_pembayaran')->get();
 
    	// mengirim data metode_pembayaran ke view index
    	return view('metode',['metode' => $metode]);
 
    }

	public function tambah1()
    {
    	return view('tambahmetode');
 
    }

	public function input(Request $request)
	{
			// insert data ke table metode
	DB::table('metode_pembayaran')->insert([
		'jenis_bayar' => $request->jenis_bayar,
		'keterangan_bayar' => $request->keterangan_bayar,
	]);
	// alihkan halaman ke halaman metode
	return redirect('/metode');
	}

	public function edit( $id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
	$metode = DB::table('metode_pembayaran')->where('id_metodebayar',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('updatemetode',['metode' => $metode]);
	}

	public function update(Request $request)
	{
			// update data ke table pegawai
	DB::table('metode_pembayaran')->where('id_metodebayar',$request->id_metodebayar)->update([
			'jenis_bayar' => $request->jenis_bayar,
			'keterangan_bayar' => $request->keterangan_bayar,
		]);
	// alihkan halaman ke halaman pegawai
	return redirect('/metode');
	}

	public function hapus($id)
	{
			// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('metode_pembayaran')->where('id_metodebayar',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
	return redirect('/metode');
	}
}
