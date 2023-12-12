@extends('layout.main')
@section('title', 'Pakaian')

@section('content')
    <div class="card-body">
        <hr>
        {{-- note kenapa $pakaian->id | malah error sedangkan pakai [0] bisa  --}}
        <form class="forms-sample" method="POST" action="{{ route('pakaian.update', $pakaian[0]->id) }}" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <h4 class="card-title text-center">Edit Pakaian</h4>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" placeholder="Nama" name="nama" value="{{ $pakaian[0]->nama}}">
            </div>
            <div class="form-group">
                <label for="foto">Foto</label>
                <input type="text" class="form-control" placeholder="Foto" name="foto" value="{{ $pakaian[0]->foto}}">
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" class="form-control" placeholder="Harga" name="harga" value="{{ $pakaian[0]->harga}}">
            </div>
            <div class="form-group">
                <label for="stok">Stok</label>
                <input type="text" class="form-control" placeholder="Stok" name="stok" value="{{ $pakaian[0]->stok}}">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-light px-5">Submit</button>
                <a href="{{ url('pakaian') }}" class="btn btn-light px-5">Batal</a>
            </div>
        </form>
    </div>
@endsection
