@extends('template')

@section('content')
	<h3>Data Situs</h3>

	<a href="/situsweb" class="btn btn-info"> Kembali</a>
	<br/>
	<br/>
	<form action="/situsweb/store">
		{{ csrf_field() }}
        <div class="row">
            <div class="col-3">
                Nama Situs
            </div>
            <div class="col-8">
                <input type="text" name="nama" required="required" class="form-control">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-3">
                URL
            </div>
            <div class="col-8">
                <input type="text" name="url" required="required" class="form-control">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-3">
                Aktif
            </div>
            <div class="col-8">
                <select name="aktif" class="form-control">
                    <option value="1">Aktif</option>
                    <option value="0">Tidak Aktif</option>
                </select>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-3">
                Uptime
            </div>
            <div class="col-8">
                <input type="number" name="uptime" required="required" class="form-control"></input>
            </div>
        </div>
		<input type="submit" class="btn btn-success" value="Simpan Data">
	</form>
@endsection
