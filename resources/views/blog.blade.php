<!DOCTYPE html>
<!-- <html>

<head>
	<title>Tutorial Laravel - www.malasngoding.com</title>
</head>

<body>
	<h3>www.malasngoding.com</h3>
	<p>Seri Tutorial Laravel Lengkap Dari Dasar</p>z
	<p>Ini adalah view blog. ada di route blog.</p>
<<<<<<< HEAD
	Nama : {{$nama}} -
	Alamat : {{$alamat}} -
	Umur : {{$umur}}
</body>

</html> -->

<html>

<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>

<body>

	<h2>www.malasngoding.com</h2>
	<h3>Data Pegawai</h3>

	<a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>

	<br />
	<br />

	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
				<a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

=======

	<a href="/pegawai/{{ date ('D M Y')}}"> klik disini </a>
>>>>>>> bbd31d1bd88ced66751208fde884c01c33a4c577

</body>

</html>