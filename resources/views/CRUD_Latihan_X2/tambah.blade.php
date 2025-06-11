@extends('template')
@section('content')
	<h3>Data Karyawan</h3>

	<a href="/karyawan" class="btn btn-info"> Kembali</a>
	<br/>
	<br/>
	<form action="/karyawan/store">
		{{ csrf_field() }}
        <div class="row">
            <div class="col-3">
                Kode Pegawai
            </div>
            <div class="col-8">
                <input type="text" name="kodepegawai" id="kode" required="required" maxlength="5" class="form-control">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-3">
                Nama Lengkap
            </div>
            <div class="col-8">
                <input type="text" name="nama" id="nama" required="required" maxlength="50" class="form-control">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-3">
                Divisi
            </div>
            <div class="col-8">
                <input type="text" name="divisi" id="divisi" required="required" maxlength="5" class="form-control">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-3">
                Departemen
            </div>
            <div class="col-8">
                <input type="text" name="departemen" required="required" maxlength="10" class="form-control">
            </div>
        </div>
		<input type="submit" class="btn btn-success" value="SIMPAN">
	</form>
@endsection
