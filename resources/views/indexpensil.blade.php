@extends('master2')
@section('title', 'Database pensil')

@section('judul_halaman')

<h2>www.malasngoding.com</h2>
<h3>Data pensil</h3>

<a href="/pensil/tambahpensil"> + Tambah Pensil Baru</a>

<br />
<br />
@endsection

@section('konten')

<p>Cari Nama Pensil :</p>
<form action="/pensil/cari" method="GET">
    <input class="form-control" type="text" name="cari" placeholder="Cari pensil berdasarkan merk"
        value="{{ old('cari') }}">
    <p></p>
    <input type="submit" value="CARI" class="btn btn-primary">
    <p></p>
</form>

<table class="table table-striped table-hover">
    <tr style="text-align: center;">
        <th>Kode Pensil</th>
        <th>Merk Pensil</th>
        <th>Stock Pensil</th>
        <th>Ketersediaan</th>
        <th>Opsi</th>
    </tr>
    @foreach ($pensil as $pe)
    <tr style="text-align: center;">
        <td>{{ $pe->kodepensil }}</td>
        <td>{{ $pe->merkpensil }}</td>
        <td>{{ $pe->stockpensil }}</td>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

        <td style="text-align: center;">
            <div class="custom-checkbox"
                style="border: 2px solid {{ $pe->tersedia == 'Y' ? 'green' : 'red' }}; border-radius: 10px; margin-top: 3px; background-color: {{ $pe->tersedia == 'Y' ? 'lightgreen' : 'lightcoral' }};">
                <label for="customCheckbox{{ $pe->kodepensil }}"
                    style="color: {{ $pe->tersedia == 'Y' ? 'green' : 'red' }};">
                    {{ $pe->tersedia == 'Y' ? 'Y' : 'N' }}
                </label>
                <input type="checkbox" {{ $pe->tersedia == 'Y' ? 'checked' : '' }} disabled
                id="customCheckbox{{ $pe->kodepensil }}">
                <label for="customCheckbox{{ $pe->kodepensil }}">

                </label>
            </div>
        </td>



        <td>
            <a href="/pensil/view/{{ $pe->kodepensil }}" class="btn btn-success">View</a>
            |
            <a href="/pensil/edit/{{ $pe->kodepensil }}" class="btn btn-warning">Edit</a>
            |
            <a href="/pensil/hapus/{{ $pe->kodepensil }}" class="btn btn-danger">Hapus</a>
        </td>
    </tr>
    @endforeach
</table>
{{ $pensil->links() }}

@endsection