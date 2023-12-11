@extends('mastersalwa')
@section('title', 'Database Karyawan')

@section('judul_halaman')

<div class="row">
    <div class="col">
        <a href="https://github.com/salwaiqlimaa" target="_blank">
            <h3>Salwa's Github</h3>
        </a>
    </div>
    <div class="col text-right">
        <a href="/karyawanx2/tambahkaryawanx2" class="btn btn-primary">+ Tambah Karyawan Baru</a>
    </div>
</div>

<div class="row mt-3">
    <div class="col">
        <h4>Data Karyawan</h4>
    </div>
    <div class="col text-right">
        <form action="/karyawanx2/cari" method="GET">
            <div class="input-group">
                <input type="text" class="form-control" name="cari" placeholder="Cari Nama Karyawan"
                    value="{{ old('cari') }}">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">CARI</button>
                </div>
            </div>
        </form>
    </div>
</div>

<br />
<br />
@endsection

@section('konten')

<!-- Your content here -->

<table class="table table-striped table-hover">
    <tr style="text-align: center;">
        <th>ID Karyawan</th>
        <th>Nama Karyawan</th>
        <th>Divisi Karyawan</th>
        <th>Departemen</th>
        <th>Opsi</th>
    </tr>
    @foreach ($karyawanx2 as $k)
    <tr style="text-align: center">
        <td>{{ $k->kodekaryawan }}</td>
        <td>{{ strtoupper($k->namalengkap) }}</td>
        <td>{{ $k->divisi }}</td>
        <td>{{ strtolower($k->departemen) }}</td>
        <td>
            <a href="/karyawanx2/viewkaryawanx2/{{ $k->kodekaryawan }}" class="btn btn-success">View</a>
            |
            <a href="/karyawanx2/hapuskaryawanx2/{{ $k->kodekaryawan }}" class="btn btn-danger">Hapus</a>
            |
            <a href="/karyawanx2/editkaryawanx2/{{ $k->kodekaryawan }}" class="btn btn-warning">Edit</a>
        </td>
    </tr>
    @endforeach
</table>
{{ $karyawanx2->links() }}

@endsection