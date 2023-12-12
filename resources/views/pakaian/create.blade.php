@extends('layout.main')
@section('title', 'Pakaian')

@section('content')
        <form class="forms-sample" method="POST" action="{{ route('pakaian.store') }}">
            @csrf
            <h4 class="card-title text-center">Tambah Pakaian</h4>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" placeholder="Nama" name="nama">
            </div>
            <div class="form-group">
                <label for="foto">Foto</label>
                <input type="file" class="form-control" placeholder="Foto" name="foto">
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" class="form-control" placeholder="Harga" name="harga">
            </div>
            <div class="form-group">
                <label for="stok">Stok</label>
                <input type="text" class="form-control" placeholder="Stok" name="stok">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-light px-5">Submit</button>
                <a href="{{ url('pakaian') }}" class="btn btn-light px-5">Batal</a>
            </div>
        </form>
    </div>
@endsection
