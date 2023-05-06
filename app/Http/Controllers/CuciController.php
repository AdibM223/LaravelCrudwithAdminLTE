<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CuciController extends Controller
{
    public function index()
    {
    	// mengambil data dari table kendaraan
    	$kendaraan = DB::table('kendaraan')->get();
 
    	// mengirim data kendaraan ke view index
    	return view('index',['kendaraan' => $kendaraan]);
 
    }

	public function tambah1()
    {
    	return view('tambahkendaraan');
 
    }

	public function input(Request $request)
	{
			// insert data ke table kendaraan
	DB::table('kendaraan')->insert([
		'jenis_kendaraan' => $request->jenis_kendaraan,
		'nama_pemilik' => $request->nama_pemilik,
		'notelp' => $request->notelp,
		'jenis_cuci' => $request->jenis_cuci
	]);
	// alihkan halaman ke halaman kendaraan
	return redirect('/');
	}

	public function edit( $id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
	$kendaraan = DB::table('kendaraan')->where('idkendaraan',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('updatekendaraan',['kendaraan' => $kendaraan]);
	}

	public function update(Request $request)
	{
			// update data ke table kendaraan
	DB::table('kendaraan')->where('idkendaraan',$request->idkendaraan)->update([
		'jenis_kendaraan' => $request->jenis_kendaraan,
		'nama_pemilik' => $request->nama_pemilik,
		'notelp' => $request->notelp,
		'jenis_cuci' => $request->jenis_cuci
	]);
	// alihkan halaman ke halaman kendaraan
	return redirect('/');
	}

	public function hapus($id)
	{
			// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('kendaraan')->where('idkendaraan',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
	return redirect('/');
	}
}
