@extends('layout.main')
@section('title', 'Costumer')

@section('content')
    <div class="card-body">
        <hr>
        <form class="forms-sample" method="POST" action="{{ route('costumer.update', $costumer[0]->id) }}">
            @csrf
            @method('patch')
            <h4 class="card-title text-center">Tambah Pakaian</h4>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" placeholder="Nama" name="nama" value="{{ $costumer[0]->nama}}">
            </div>
            <div class="form-group">
                <label for="no_telepon">Nomor Telepon</label>
                <input type="text" class="form-control" placeholder="Nomor Telepon" name="no_telepon" value="{{ $costumer[0]->no_telepon}}">
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">jenis_kelamin</label>
                <input type="text" class="form-control" placeholder="Jenis Kelamin" name="jenis_kelamin" value="{{ $costumer[0]->jenis_kelamin}}">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" placeholder="Alamat" name="alamat" value="{{ $costumer[0]->alamat}}">
            </div>
            <div class="form-group">
                <label for="kota">Kota</label>
                <input type="text" class="form-control" placeholder="Masukan Nama Kota" name="kota" value="{{ $costumer[0]->kota}}">
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" class="form-control" placeholder="Tanggal Lahir" name="tanggal_lahir" value="{{ $costumer[0]->tanggal_lahir}}">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-light px-5">Submit</button>
                <a href="{{ url('costumer') }}" class="btn btn-light px-5">Batal</a>
            </div>
        </form>
    </div>
@endsection
