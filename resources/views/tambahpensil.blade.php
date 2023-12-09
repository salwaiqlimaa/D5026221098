@extends('master2')

@section('konten')

<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
<h3>Data Pensil</h3>

<a href="/pensil"> Kembali</a>

<br />
<br />

<form action="/pensil/store" method="post" form-horizontal>
    {{ csrf_field() }}
    <div class="form-group row">
        <label for="merk" class="col-sm-2 control-label">Merk Pensil</label>
        <div class="col-sm-10">
            <input name="merk" type="text" class="form-control" id="merk" placeholder="Masukkan Merk Pensil">
        </div>
    </div>
    <div class="form-group row">
        <label for="stock" class="col-sm-2 control-label">Stock</label>
        <div class="col-sm-10">
            <input name="stock" type="number" class="form-control" id="stock" placeholder="Masukkan Stock Pensil">
        </div>
    </div>
    <div class="form-group row">
        <label for="tersedia" class="col-sm-2 control-label">Tersedia</label>
        <div class="col-sm-10">
            <input name="tersedia" type="text" class="form-control" id="tersedia" placeholder="Apakah pensil tersedia?">
        </div>
    </div>

    <input type="submit" value="Simpan Data" class="btn btn-primary">
</form>
@endsection