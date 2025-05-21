<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Link extends Controller
{
    //
    public function helloWorld(){
        return view('blog');
    }

    public function index(){
        $nama = "Diki Alfarabi Hadi";
        $skala = "90%";
        $umur = 35;
        $alamat = "surabaya";
        $kelas = "h2";
        $pelajaran = ["Algoritma & Pemrograman","Kalkulus","Pemrograman Web"];
    	return view('biodata',['nama'=>$nama, 'usia'=>$umur, 'alamat'=>$alamat, 'skala'=>$skala, 'kelas'=>$kelas, 'matkul' => $pelajaran]);
    }
}
