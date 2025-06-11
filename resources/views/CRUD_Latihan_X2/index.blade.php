@extends('template')

@section('content')
	<h3>Data Karyawan</h3>
	<br/>
	<table class="table table-striped">
		<tr>
			<th>Nama Lengkap</th>
			<th>Divisi</th>
			<th>Departemen</th>
			<th>Hapus</th>
		</tr>
		@foreach($karyawan as $p)
		<tr>
			<td>{{ $p->namalengkap }}</td>
			<td>{{ $p->divisi }}</td>
			<td>{{ $p->departemen }}</td>
			<td>
				<a href="/karyawan/hapus/{{ $p->kodepegawai }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    <a href="/karyawan/tambah" class="btn btn-primary"> + Tambah Karyawan Baru</a>
{{$karyawan->links()}}
@endsection
