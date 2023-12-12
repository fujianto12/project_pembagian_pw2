@extends('layout.main')
@section('title', 'Supplier')

@section('content')
    <div class="card-body">
        <hr>
        {{-- note kenapa $supplier->id | malah error sedangkan pakai [0] bisa  --}}
        <form class="forms-sample" method="POST" action="{{ route('supplier.update', $supplier[0]->id) }}"
            enctype="multipart/form-data">
            @csrf
            @method('patch')
            <h4 class="card-title text-center">Edit Supplier</h4>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" placeholder="Nama" name="nama" value="{{ $supplier[0]->nama }}">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" placeholder="Alamat" name="alamat" value=" {{ $supplier[0]->alamat }}">
            </div>
            <div class="form-group">
                <label for="kota">Kota</label>
                <input type="text" class="form-control" placeholder="Kota" name="kota" value=" {{ $supplier[0]->kota }}">
            </div>
            <div class="form-group">
                <label for="kode_pos">Kode Pos</label>
                <input type="text" class="form-control" placeholder="Kode Pos" name="kode_pos"
                    value=" {{ $supplier[0]->kode_pos }}">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-light px-5">Submit</button>
                <a href="{{ url('supplier') }}" class="btn btn-light px-5">Batal</a>
            </div>
        </form>
    </div>
@endsection
