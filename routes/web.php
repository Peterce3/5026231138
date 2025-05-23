<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link ;
use App\Http\Controllers\PegawaiController ;
use App\Http\Controllers\BlogController ;

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
Route::get('/pegawai/{nama}', [PegawaiController::class, 'index'] );

Route::get('/formulir', [PegawaiController::class, 'formulir'] );
Route::post('/formulir/proses', [PegawaiController::class, 'proses'] );

//route blog
Route::get('/blog', [BlogController::class, 'home'] );
Route::get('/blog/tentang', [BlogController::class, 'tentang'] );
Route::get('/blog/kontak', [BlogController::class, 'kontak'] );
