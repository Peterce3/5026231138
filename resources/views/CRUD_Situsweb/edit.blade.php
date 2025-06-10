@extends('template')

@section('content')
	<h3>Edit Situsweb</h3>

	<a href="/situsweb" class="btn btn-info"> Kembali</a>

	<br/>
	<br/>

	@foreach($situsweb as $p)
	<form action="/situsweb/update">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->id }}"> <br/>
        <div class="row">
            <div class="col-3">
                Nama Situs
            </div>
            <div class="col-8">
                <input type="text" name="nama" required="required" value="{{ $p->namasitusweb }}" class="form-control">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-3">
                URL
            </div>
            <div class="col-8">
                <input type="text" name="url" required="required" value="{{ $p->url }}" class="form-control">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-3">
                Aktif
            </div>
            <div class="col-8">
                <select name="aktif" class="form-control" required>
                    <option value="" disabled {{ $p->aktif === null ? 'selected' : '' }}>-- Pilih Status --</option>
                    <option value="1" {{ $p->aktif == 1 ? 'selected' : '' }}>Aktif</option>
                    <option value="0" {{ $p->aktif == 0 ? 'selected' : '' }}>Tidak Aktif</option>
                </select>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-3">
                Uptime
            </div>
            <div class="col-8">
                <input type="number" name="uptime" required="required" value="{{ $p->uptime }}" class="form-control"></input>
            </div>
        </div>
		<input type="submit" class="btn btn-success" value="Simpan Data">
	</form>
	@endforeach
@endsection
