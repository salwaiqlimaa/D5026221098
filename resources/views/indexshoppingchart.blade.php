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
        <a href="/shoppingchart/tambahshoppingchart" class="btn btn-primary">+ Tambah Pembelian Barang</a>
    </div>
</div>

<div class="row mt-3">
    <div class="col">
        <h4>Data Pembelian</h4>
    </div>
    <div class="col text-right">
        <form action="/shoppingchart/cari" method="GET">
            <div class="input-group">
                <input type="text" class="form-control" name="cari" placeholder="Cari Nama Barang"
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
        <th>ID Barang</th>
        <th>Kode Barang</th>
        <th>Jumlah</th>
        <th>Harga</th>
        <th>Total</th>
        <th>Action</th>
    </tr>
    @foreach ($shoppingchart as $sc)
    <tr>
        <td>{{ $sc->id }}</td>
        <td>{{ $sc->KodeBarang }}</td>
        <td>{{ $sc->Jumlah }}</td>
        <td>Rp. {{ number_format($sc->Harga, 0, '.', '.') }}</td>
        <td>Rp. {{ number_format($sc->Jumlah * $sc->Harga, 0, '.', '.') }}</td>
        <td>
            <a href="/shoppingchart/hapusshoppingchart/{{ $sc->id }}" class="btn btn-success">Batal</a>
        </td>
    </tr>
    @endforeach
</table>
{{ $shoppingchart->links() }}

@endsection