@extends('template')

@section('content')
	<h3>Data Situs</h3>

	<a href="/eas" class="btn btn-info"> Kembali</a>
	<br/>
	<br/>
	<form action="/eas/tambah">
		{{ csrf_field() }}
        <div class="id">
            <div class="col-3">
                ID
            </div>
            <div class="col-8">
                <input type="text" name="nama" required="required" class="form-control">
            </div>
        </div>
        <br>
        <div class="nomorinduksiswa">
            <div class="col-3">
                NRP
            </div>
            <div class="col-8">
                <input type="text" name="nama" required="required" class="form-control">
            </div>
        </div>
        <br>
        <div class="id">
            <div class="col-3">
                ID
            </div>
            <div class="col-8">
                <input type="text" name="nama" required="required" class="form-control">
            </div>
        </div>
        <br>
		<input type="submit" class="btn btn-success" value="Simpan Data">
	</form>
@endsection
