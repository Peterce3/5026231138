@extends('template')

@section('content')
	<h3>Data Situs</h3>
	<a href="/eas/tambah" class="btn btn-primary"> + Tambah Situs Baru</a>
	<br/>
	<br/>
	<table class="table table-striped">
		<tr>
			<th>ID</th>
			<th>NRP</th>
			<th>Nilai Angka</th>
			<th>SKS</th>
			<th>Nilai Huruf</th>
		</tr>
		@foreach($nilai as $n)
		<tr>
			<td>{{ $n->id }}</td>
			<td>{{ $n->nomorinduksiswa }}</td>
            <td>{{ $n->nilaiangka }}</td>
			<td>{{ $n->sks}}</td>

		</tr>
		@endforeach
	</table>
{{$nilai->links()}}
@endsection
