@extends('template')

@section('content')
	<h3>Data Situs</h3>

	<a href="/eas" class="btn btn-info"> Kembali</a>
	<br/>
	<br/>
	<form action="/eas/store">
		{{ csrf_field() }}
        <div class="nomorinduksiswa">
            <div class="col-3">
                NRP
            </div>
            <div class="col-8">
                <input type="number" name="nrp" id="nrp" required="required" class="form-control">
            </div>
        </div>
        <br>
        <div class="nilaiangka">
            <div class="col-3">
                Nilai Angka
            </div>
            <div class="col-8">
                <input type="number" name="nilaiangka" id="nilaiangka" required="required" class="form-control">
            </div>
        </div>
        <br>
            <div class="sks">
            <div class="col-3">
                SKS
            </div>
            <div class="col-8">
                <input type="number" name="sks" id="sks" required="required" class="form-control">
            </div>
        </div>
        <br>
		<input type="submit" class="btn btn-success" value="Simpan Data">
	</form>
@endsection
