@extends('master2')
@section('title','Database Pegawai')
@section('judul_halaman')

<h2>www.malasngoding.com</h2>
<h3>Data Pegawai</h3>

<a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>

<br />
<br />
@endsection

@section('konten')

<p>Cari Data Pegawai :</p>
<form action="/pegawai/cari" method="GET">
    <input class="form-control" type="text" name="cari" placeholder="Cari Pegawai berdasarkan nama"
        value="{{ old('cari') }}">
        <p></p>
    <input type="submit" value="CARI" class="btn btn-primary">
</form>
<p></p>

<table class='table table-striped table-hover'>
    <tr>
        <!-- <th>id</th> -->
        <th>Nama</th>
        <th>Jabatan</th>
        <th>Umur</th>
        <th>Alamat</th>
        <th>Opsi</th>
    </tr>
    @foreach($pegawai as $p)
    <tr>
        <!-- <td>{{ $p->id_pegawai }}</td> -->
        <td>{{ $p->nama_pegawai }}</td>
        <td>{{ $p->jabatan_pegawai }}</td>
        <td>{{ $p->umur_pegawai }}</td>
        <td>{{ $p->alamat_pegawai }}</td>
        <td>
            <a href="/pegawai/view/{{ $p->id_pegawai }}" class="btn btn-success">View</a>
            |
            <a href="/pegawai/edit/{{ $p->id_pegawai }}" class="btn btn-warning">Edit</a>
            |
            <a href="/pegawai/hapus/{{ $p->id_pegawai }}" class="btn btn-danger">Hapus</a>
        </td>
    </tr>
    @endforeach
</table>
{{ $pegawai->links() }}
@endsection