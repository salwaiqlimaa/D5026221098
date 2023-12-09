@extends('master2')

@section('konten')
<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
<h3>Edit Data Pensil</h3>

<a href="/pensil"> Kembali</a>

<br />
<br />

@foreach ($pensil as $pe)
<form action="/pensil/update" method="post" class="form-horizontal" role="form">
    {{ csrf_field() }}
    <input type="hidden" name="kode" value="{{ $pe->kodepensil}}">
    <div class="form-group row">
        <label for="kode" class="col-sm-2 control-label">Kode Pensil</label>
        <div class="col-sm-10">
            <input type="text" required="required" name="kode" value="{{ $pe->kodepensil }}" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="merk" class="col-sm-2 control-label">Merk Pensil</label>
        <div class="col-sm-10">
            <input type="text" required="required" name="merk" value="{{ $pe->merkpensil }}" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="stock" class="col-sm-2 control-label">Stock Pensil</label>
        <div class="col-sm-10">
            <input type="number" required="required" name="stock" value="{{ $pe->stockpensil }}" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="tersedia" class="col-sm-2 control-label">Tersedia</label>
        <div class="col-sm-10">
            <input type="text" required="required" name="tersedia" value="{{ $pe->tersedia }}" class="form-control">
        </div>
    </div>
    <input type="submit" value="Simpan Data" class="btn btn-primary">
</form>
@endforeach
@endsection