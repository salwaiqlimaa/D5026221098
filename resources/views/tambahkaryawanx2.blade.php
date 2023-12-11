@extends('mastersalwa')

@section('konten')

<a href="https://github.com/salwaiqlimaa" target="_blank"><h3>Salwa's Github</h3></a>
<h3>Edit Data Karyawan</h3>

<a href="/karyawanx2"> Kembali</a>

<br />
<br />

<form action="/karyawanx2/store" method="post" form-horizontal>
    {{ csrf_field() }}
    <div class="form-group row">
        <label for="kode" class="col-sm-2 control-label">ID Karyawan</label>
        <div class="col-sm-10">
            <input name="kode" type="number" class="form-control" id="kode" placeholder="Masukkan ID Karyawan">
        </div>
    </div>
    <div class="form-group row">
        <label for="nama" class="col-sm-2 control-label">Nama</label>
        <div class="col-sm-10">
            <input name="nama" type="text" class="form-control" id="nama" placeholder="Masukkan Nama Karyawan">
        </div>
    </div>
    <div class="form-group row">
        <label for="divisi" class="col-sm-2 control-label">Divisi</label>
        <div class="col-sm-10">
            <input name="divisi" type="text" class="form-control" id="divisi" placeholder="Masukkan Divisi Karyawan">
        </div>
    </div>
    <div class="form-group row">
        <label for="departemen" class="col-sm-2 control-label">Departemen</label>
        <div class="col-sm-10">
            <input name="departemen" type="text" class="form-control" id="departemen" placeholder="Masukkan Departemen Karyawan">
        </div>
    </div>

    <input type="submit" value="Simpan Data" class="btn btn-primary">
</form>
@endsection