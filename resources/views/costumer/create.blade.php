@extends('layout.main')
@section('title', 'Costumer')

@section('content')
    <div class="card-body">
        <hr>
        <form class="forms-sample" method="POST" action="{{ route('costumer.store') }}">
            @csrf
            <h4 class="card-title text-center">Tambah Costumer</h4>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" placeholder="Nama" name="nama">
            </div>
            <div class="form-group">
                <label for="no_telepon">no_telepon</label>
                <input type="text" class="form-control" placeholder="no_telepon" name="no_telepon">
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">jenis_kelamin</label>
                <input type="text" class="form-control" placeholder="jenis_kelamin" name="jenis_kelamin">
            </div>
            <div class="form-group">
                <label for="alamat">alamat</label>
                <input type="text" class="form-control" placeholder="alamat" name="alamat">
            </div>
            <div class="form-group">
                <label for="kota">kota</label>
                <input type="text" class="form-control" placeholder="kota" name="kota">
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">tanggal_lahir</label>
                <input type="date" class="form-control" placeholder="tanggal_lahir" name="tanggal_lahir">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-light px-5">Submit</button>
                <a href="{{ url('costumer') }}" class="btn btn-light px-5">Batal</a>
            </div>
        </form>
    </div>
@endsection
