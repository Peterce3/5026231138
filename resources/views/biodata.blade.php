<!DOCTYPE html>
<html>
<head>
	<title>{{$nama}} Tutorial Laravel #4 : Passing Data Controller Ke View Laravel - www.malasngoding.com</title>
</head>
<body>

	<h1>Tutorial Laravel</h1>
	<a href="https://www.malasngoding.com/category/laravel">www.malasngoding.com</a>
    <br>
    <p>Nama : {{$nama}}</p>
    <p style="scale: {{$skala}}">Umur : {{$usia}}</p>
    <p>Alamat : {{$alamat}}</p>
    <{{$kelas}}>Alamat : {{$alamat}}</{{$kelas}}>
    <ul>
		@foreach($matkul as $m)
		    <li>{{ $m }}</li>
		@endforeach
	</ul>



</body>
</html>
