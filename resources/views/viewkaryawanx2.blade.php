@extends('mastersalwa')
@section('konten')
<a href="https://github.com/salwaiqlimaa" target="_blank"><h3>Salwa's Github</h3></a>
<h3>View Data Karyawan</h3>

<a href="/karyawanx2">Kembali</a>

<br />
<br />

<div class="row">
    <div class="col-1"></div>
    <div class="col-3 d-flex align-items-center justify-content-center">
        @foreach ($karyawanx2 as $k)
        <div class="card" style="width:200px">
            <img src="{{ asset('img/pensilsalwa.jpg') }}">
            <div class="card-body text-center">
                <h4 class="card-title">{{ $k->namalengkap }}</h4>
                <p class="card-text">ID: {{ $k->kodekaryawan }}</p>
                <a href="#" class="btn btn-primary">See Image</a>
            </div>
        </div>
        @endforeach
    </div>
    <div class="col-8">
        @foreach ($karyawanx2 as $k)
        <fieldset disabled>
            <form action="/karyawanx2/update" method="post" class="form-horizontal" role="form">
                {{ csrf_field() }}
                <input type="hidden" name="kode" value="{{ $k->kodekaryawan}}">
                <div class="form-group row">
                    <label for="kode" class="col-sm-2 control-label">ID Karyawan</label>
                    <div class="col-sm-10">
                        <input type="number" required="required" name="kode" value="{{ $k->kodekaryawan }}"
                            class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="merk" class="col-sm-2 control-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <input type="text" required="required" name="merk" value="{{ $k->namalengkap }}"
                            class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="divisi" class="col-sm-2 control-label">Divisi</label>
                    <div class="col-sm-10">
                        <input type="text" required="required" name="divisi" value="{{ $k->divisi }}"
                            class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="departemen" class="col-sm-2 control-label">Departemen</label>
                    <div class="col-sm-10">
                        <input type="text" required="required" name="tersedia" value="{{ $k->departemen }}"
                            class="form-control">
                    </div>
                </div>
            </form>
        </fieldset>
        @endforeach
        <div class="row">
            <div class="col-10 text-center">
                <a href="/karyawanx2" class="btn btn-primary w-25 p-2">OK</a>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
</div>
@endsection
