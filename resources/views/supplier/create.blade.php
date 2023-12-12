@extends('layout.main')
@section('title', 'Supplier')

@section('content')
    <div class="card-body">
        <hr>
        <form class="forms-sample" method="POST" action="{{ route('supplier.store') }}">
            @csrf
            <h4 class="card-title text-center">Tambah Supplier</h4>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" placeholder="Nama" name="nama">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" placeholder="Alamat" name="alamat">
            </div>
            <div class="form-group">
                <label for="kota">Kota</label>
                <input type="text" class="form-control" placeholder="Kota" name="kota">
            </div>
            <div class="form-group">
                <label for="kode_pos">Kode Pos</label>
                <input type="text" class="form-control" placeholder="Kode Pos" name="kode_pos">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-light px-5">Submit</button>
                <a href="{{ url('supplier') }}" class="btn btn-light px-5">Batal</a>
            </div>
        </form>
    </div>
@endsection
