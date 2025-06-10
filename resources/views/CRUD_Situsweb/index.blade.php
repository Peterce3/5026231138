@extends('template')

@section('content')
	<h3>Data Situs</h3>
	<a href="/situsweb/tambah" class="btn btn-primary"> + Tambah Situs Baru</a>
    <p>Cari Data Situs :</p>
	<form action="/situsweb/cari" method="GET">
		<input type="text" class="form-control col-md-5" name="cari" placeholder="Cari Situs .." >
		<input type="submit" class="btn btn-info" value="CARI">
	</form>
	<br/>
	<br/>
	<table class="table table-striped">
		<tr>
			<th>Nama Situs</th>
			<th>URL</th>
			<th>Aktif</th>
			<th>Uptime</th>
			<th>Opsi</th>
		</tr>
		@foreach($situsweb as $p)
		<tr>
			<td>{{ $p->namasitusweb }}</td>
			<td>{{ $p->url }}</td>
			<td>{{ $p->aktif }}</td>
			<td>{{ $p->uptime }}</td>
			<td>
				<a href="/situsweb/edit/{{ $p->id }}" class="btn btn-success">Edit</a>
				|
				<a href="/situsweb/hapus/{{ $p->id }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
{{$situsweb->links()}}
@endsection
