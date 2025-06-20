<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link ;
use App\Http\Controllers\PegawaiController ;
use App\Http\Controllers\Pegawai2Controller ;
use App\Http\Controllers\BlogController ;
use App\Http\Controllers\SituswebController ;
use App\Http\Controllers\KaryawanController ;
use App\Http\Controllers\KeranjangBelanjaController;
use App\Http\Controllers\EasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h2>Halo, Selamat datang di tutorial laravel www.malasngoding.com<h2>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('hello', [Link::class, 'helloWorld'] );

Route::get('frontend', function () {
	return view('frontend');
});

Route::get('pertemuan3', function () {
	return view('first');
});

Route::get('pertemuan4', function () {
	return view('Pertemuan4');
});

Route::get('tugaslinktree', function () {
	return view('linktree');
});

Route::get('pertemuan7', function () {
	return view('JS1');
});

Route::get('pertemuan7latihan', function () {
	return view('js2');
});

Route::get('pertemuan8', function () {
	return view('index_latihan');
});

Route::get('ETS', function () {
	return view('index_ETS');
});

Route::get('dosen', [Link::class, 'index'] );
//Route::get('/pegawai/{nama}', [PegawaiController::class, 'index'] );

Route::get('/formulir', [PegawaiController::class, 'formulir'] );
Route::post('/formulir/proses', [PegawaiController::class, 'proses'] );

//route blog
Route::get('/blog', [BlogController::class, 'home'] );
Route::get('/blog/tentang', [BlogController::class, 'tentang'] );
Route::get('/blog/kontak', [BlogController::class, 'kontak'] );

//crud pegawai
Route::get('/pegawai', [PegawaiController::class, 'index'] );
Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah'] );
Route::get('/pegawai/store', [PegawaiController::class, 'store'] );
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit'] );
Route::get('/pegawai/update', [PegawaiController::class, 'update'] );
Route::get('/pegawai/hapus/{id}', [PegawaiController::class, 'hapus'] );
Route::get('/pegawai/cari', [PegawaiController::class, 'cari'] );

//crud situsweb
Route::get('/situsweb', [SituswebController::class, 'index'] );
Route::get('/situsweb/tambah', [SituswebController::class, 'tambah'] );
Route::get('/situsweb/store', [SituswebController::class, 'store'] );
Route::get('/situsweb/edit/{id}', [SituswebController::class, 'edit'] );
Route::get('/situsweb/update', [SituswebController::class, 'update'] );
Route::get('/situsweb/hapus/{id}', [SituswebController::class, 'hapus'] );
Route::get('/situsweb/cari', [SituswebController::class, 'cari'] );

//crud karyawan
Route::get('/karyawan', [KaryawanController::class, 'index'] );
Route::get('/karyawan/tambah', [KaryawanController::class, 'tambah'] );
Route::get('/karyawan/store', [KaryawanController::class, 'store'] );
Route::get('/karyawan/hapus/{id}', [KaryawanController::class, 'hapus'] );

// Keranjang Belanja routes
Route::get('/keranjangbelanja', [KeranjangBelanjaController::class, 'index']);
Route::get('/keranjangbelanja/beli', [KeranjangBelanjaController::class, 'beli']);
Route::post('/keranjangbelanja/store', [KeranjangBelanjaController::class, 'store']);
Route::get('/keranjangbelanja/batal/{id}', [KeranjangBelanjaController::class, 'batal']);

// Eas routes
Route::get('/eas', [EasController::class, 'index']);
Route::get('/eas/tambah', [EasController::class, 'tambah'] );
Route::get('/eas/store', [EasController::class, 'store']);
