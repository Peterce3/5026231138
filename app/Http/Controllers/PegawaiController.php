<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index($nama){
        return "<h1>" . $nama . "</h1>";
    }
    public function formulir(){
    	return view('formulir');
    }
    public function proses(Request $request){
        $nama = $request->input('nama'); //name variable parsing
     	$alamat = $request->input('alamat');
        $skala = $request->input('skala')
        //."<br> Aslinya : ". $request
        ;
        return "Nama : <p style=&quot;scale:{{$skala}}&quot;>".$nama."</p><br> Alamat : ".$alamat;
    }
}
