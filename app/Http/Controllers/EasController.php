<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class EasController extends Controller
{
	public function index()
	{
        $nilai = DB::table('nilai')->paginate(10); //array per page
    	// mengirim data karyawan ke view index
		return view('eas/index',['nilai' => $nilai]);

	}

	// method untuk menampilkan view form tambah karyawan
	public function tambah()
	{

		// memanggil view tambah
		return view('eas/tambah');

	}

	// method untuk insert data ke table karyawan
	public function store(Request $request)
	{
		// insert data ke table karyawan
		DB::table('nilai')->insert([
			'nomorinduksiswa' => $request->nrp,
			'nilaiangka' => $request->nilaiangka,
			'sks' => $request->sks
		]);
		// alihkan halaman ke halaman karyawan
		return redirect('/eas');
	}
}
