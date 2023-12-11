@extends('mastersalwa')

@section('konten')
<a href="https://github.com/salwaiqlimaa" target="_blank"><h3>Salwa's Github</h3></a>
<h3>Edit Data Karyawan</h3>

<a href="/karyawanx2"> Kembali</a>

<br />
<br />

@foreach ($karyawanx2 as $k)
<form action="/karyawanx2/update" method="post" class="form-horizontal" role="form">
    {{ csrf_field() }}
    <input type="hidden" name="kode" value="{{ $k->kodekaryawan}}">
    <div class="form-group row">
        <label for="kode" class="col-sm-2 control-label">ID Karyawan</label>
        <div class="col-sm-10">
            <input type="number" required="required" name="kode" value="{{ $k->kodekaryawan }}" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="nama" class="col-sm-2 control-label">Nama Lengkap</label>
        <div class="col-sm-10">
            <input type="text" required="required" name="nama" value="{{ $k->namalengkap }}" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="divisi" class="col-sm-2 control-label">Divisi</label>
        <div class="col-sm-10">
            <input type="text" required="required" name="divisi" value="{{ $k->divisi }}" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="departemen" class="col-sm-2 control-label">Departemen</label>
        <div class="col-sm-10">
            <input type="text" required="required" name="departemen" value="{{ $k->departemen }}" class="form-control">
        </div>
    </div>
    <input type="submit" value="Simpan Data" class="btn btn-primary">
</form>
@endforeach
@endsection