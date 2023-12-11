@extends('mastersalwa')

@section('konten')

<a href="https://github.com/salwaiqlimaa" target="_blank"><h3>Salwa's Github</h3></a>
<h3>Tambah Data Pembelian</h3>

<a href="/shoppingchart"> Kembali</a>

<br />
<br />

<form action="/shoppingchart/store" method="post" form-horizontal>
    {{ csrf_field() }}
    <div class="form-group row">
        <label for="id" class="col-sm-2 control-label">Kode Barang</label>
        <div class="col-sm-10">
            <input name="id" type="number" class="form-control" id="id" placeholder="Masukkan Kode Pembelian">
        </div>
    </div>
    <div class="form-group row">
        <label for="number" class="col-sm-2 control-label">Kode Barang</label>
        <div class="col-sm-10">
            <input name="kode" type="number" class="form-control" id="nama" placeholder="Masukkan Kode Barang">
        </div>
    </div>
    <div class="form-group row">
        <label for="jumlah" class="col-sm-2 control-label">Jumlah</label>
        <div class="col-sm-10">
            <input name="jumlah" type="number" class="form-control" id="jumlah" placeholder="Masukkan Jumlah">
        </div>
    </div>
    <div class="form-group row">
        <label for="harga" class="col-sm-2 control-label">Harga</label>
        <div class="col-sm-10">
            <input name="harga" type="number" class="form-control" id="harga" placeholder="Masukkan Harga Barang">
        </div>
    </div>

    <input type="submit" value="Simpan Data" class="btn btn-primary">
</form>
@endsection