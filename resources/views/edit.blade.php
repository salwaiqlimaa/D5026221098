@extends('master2')
@section('konten')
<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
<h3>Edit Pegawai</h3>

<a href="/pegawai"> Kembali</a>

<br />
<br />

@foreach ($pegawai as $p)
        <form action="/pegawai/update" method="post" class="form-horizontal" role="form">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->id_pegawai}}">
            <div class = "form-group row">
                <label for = "nama" class = "col-sm-2 control-label">Nama</label>
                <div class = "col-sm-10">
                    <input type="text" required="required" name="nama" value="{{ $p->nama_pegawai }}"
                        class="form-control">
                </div>
            </div>
            <div class = "form-group row">
                <label for = "jabatan" class = "col-sm-2 control-label">Jabatan</label>
                <div class = "col-sm-10">
                    <input type="text" required="required" name="jabatan" value="{{ $p->jabatan_pegawai }}"
                        class="form-control">
                </div>
            </div>
            <div class = "form-group row">
                <label for = "umur" class = "col-sm-2 control-label">Umur</label>
                <div class = "col-sm-10">
                    <input type="number" required="required" name="umur" value="{{ $p->umur_pegawai }}"
                        class="form-control">
                </div>
            </div>
            <div class = "form-group row">
                <label for = "alamat" class = "col-sm-2 control-label">Alamat</label>
                <div class = "col-sm-10">
                    <textarea required="required" name="alamat" class="form-control">{{ $p->alamat_pegawai }}</textarea>
                </div>
            </div>
            <input type="submit" value="Simpan Data" class="btn btn-primary">
        </form>
    @endforeach
@endsection