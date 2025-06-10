<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SituswebController extends Controller
{
	public function index()
	{
    	// mengambil data dari table situsweb
		//$situsweb = DB::table('situsweb')->get();

        $situsweb = DB::table('situsweb')->paginate(10); //array per page
    	// mengirim data situsweb ke view index
		return view('CRUD_Situsweb/index',['situsweb' => $situsweb]);

	}

	// method untuk menampilkan view form tambah situsweb
	public function tambah()
	{

		// memanggil view tambah
		return view('CRUD_Situsweb/tambah');

	}

	// method untuk insert data ke table situsweb
	public function store(Request $request)
	{
		// insert data ke table situsweb
		DB::table('situsweb')->insert([
			'namasitusweb' => $request->nama,
			'url' => $request->url,
			'aktif' => $request->aktif,
			'uptime' => $request->uptime
		]);
		// alihkan halaman ke halaman situsweb
		return redirect('/situsweb');

	}

	// method untuk edit data situsweb
	public function edit($id)
	{
		// mengambil data situsweb berdasarkan id yang dipilih
		$situsweb = DB::table('situsweb')->where('id',$id)->get();
		// passing data situsweb yang didapat ke view edit.blade.php
		return view('CRUD_Situsweb/edit',['situsweb' => $situsweb]);

	}

	// update data situsweb
	public function update(Request $request)
	{
		// update data situsweb
		DB::table('situsweb')
        ->where('id',$request->id)
        ->update([
			'namasitusweb' => $request->nama,
			'url' => $request->url,
			'aktif' => $request->aktif,
			'uptime' => $request->uptime
		]);
		// alihkan halaman ke halaman situsweb
		return redirect('/situsweb');
	}

	// method untuk hapus data situsweb
	public function hapus($id)
	{
		// menghapus data situsweb berdasarkan id yang dipilih
		DB::table('situsweb')
        ->where('id',$id)
        ->delete();

		// alihkan halaman ke halaman situsweb
		return redirect('/situsweb');
	}

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    	// mengambil data dari table situsweb sesuai pencarian data
		$situsweb = DB::table('situsweb')
		    ->where('namasitusweb','like',"%".$cari."%")
		    ->paginate();

    	// mengirim data situsweb ke view index
		return view('CRUD_Situsweb/index',['situsweb' => $situsweb, 'cari'=> $cari ]);
	}
}
