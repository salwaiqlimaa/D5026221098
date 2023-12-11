@extends('mastersalwa')
@section('title', 'Tambah Karyawan Baru')

@section('konten')

<a href="https://github.com/salwaiqlimaa" target="_blank">
    <h3>Salwa's Github</h3>
</a>
<h3>Tambah Data Karyawan</h3>

<a href="/karyawan"> Kembali</a>

<br />
<br />

@if(session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif

@if(session('success'))
<div class="alert alert-primary">
    {{ session('success') }}
</div>
@endif

<form action="/karyawan/store" method="post" class="form-horizontal">
    {{ csrf_field() }}
    <div class="form-group row">
        <label for="kodekaryawan" class="col-sm-2 control-label">ID Karyawan</label>
        <div class="col-sm-10">
            <input name="kodekaryawan" type="number" class="form-control" id="kodekaryawan"
                placeholder="Masukkan ID Karyawan">
        </div>
    </div>
    <div class="form-group row">
        <label for="namakaryawan" class="col-sm-2 control-label">Nama</label>
        <div class="col-sm-10">
            <input name="namakaryawan" type="text" class="form-control" id="namakaryawan"
                placeholder="Masukkan Nama Karyawan">
        </div>
    </div>
    <div class="form-group row">
        <label for="divisikaryawan" class="col-sm-2 control-label">Divisi</label>
        <div class="col-sm-10">
            <input name="divisikaryawan" type="text" class="form-control" id="divisikaryawan"
                placeholder="Masukkan Divisi Karyawan">
        </div>
    </div>
    <div class="form-group row">
        <label for="departemenkaryawan" class="col-sm-2 control-label">Departemen</label>
        <div class="col-sm-10">
            <input name="departemenkaryawan" type="text" class="form-control" id="departemenkaryawan"
                placeholder="Masukkan Departemen Karyawan">
        </div>
    </div>

    <input type="submit" value="Simpan Data" class="btn btn-primary">
</form>
@endsection