@extends('master2')
@section('konten')
<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
<h3>View Data Pensil</h3>

<a href="/pensil">Kembali</a>

<br />
<br />

<div class="row">
    <div class="col-1"></div>
    <div class="col-3">
        <div class="card" style="width:200px">
            <img src="{{ asset('img/salsal.jpeg') }}">
            <div class="card-body">
                <h4 class="card-title">Merk Pensil</h4>
                <p class="card-text">Kode</p>
                <a href="#" class="btn btn-primary">See Image</a>
            </div>
        </div>
    </div>
    <div class="col-8">
        @foreach ($pensil as $pe)
        <fieldset disabled>
            <form action="/pensil/update" method="post" class="form-horizontal" role="form">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="kode" class="col-sm-2 control-label">Kode Pensil</label>
                    <div class="col-sm-10">
                        <input type="text" required="required" name="kode" value="{{ $pe->kodepensil }}"
                            class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="merk" class="col-sm-2 control-label">Merk Pensil</label>
                    <div class="col-sm-10">
                        <input type="text" required="required" name="merk" value="{{ $pe->merkpensil }}"
                            class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="stock" class="col-sm-2 control-label">Stock Pensil</label>
                    <div class="col-sm-10">
                        <input type="number" required="required" name="stock" value="{{ $pe->stockpensil }}"
                            class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="tersedia" class="col-sm-2 control-label">Ketersediaan</label>
                    <div class="col-sm-10">
                        <textarea required="required" name="tersedia"
                            class="form-control">{{ $pe->tersedia }}</textarea>
                    </div>
                </div>
            </form>
        </fieldset>
        @endforeach
        <div class="row">
            <div class="col-10 text-center">
                <a href="/pensil" class="btn btn-primary w-25 p-2">Ok</a>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
</div>
@endsection