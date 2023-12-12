@extends('layout.main')
@section('title', 'pembelian')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form class="forms-sample" method="POST" action="{{ route('pembelian.update', $pembelian->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method("patch")
                        <h4 class="card-title">Tambah Pembelian</h4>

                        <select name="supplier_id" class="form-control">
                            <option value="">Pilih nama</option>
                            @foreach ($supplier as $itemSupplier)
                                <option value="{{ $itemSupplier->id }}"
                                    @if (old('supplier_id', $pembelian->supplier_id) == $itemSupplier['id']) selected @endif>{{ $itemSupplier['nama'] }}</option>
                            @endforeach
                        </select>

                        <label for="tanggal_pembelian">Masukan Tanggal Pembelian</label>
                        <input type="date" class="form-control" placeholder="Tanggal Pembelian" name="tanggal_pembelian" value="{{ $pembelian-> tanggal_pembelian}}">

                        <br>

                        <select name="pakaian_id" class="form-control">
                            <option value="">Pilih nama pakaian</option>
                            @foreach ($pakaian as $itemPakaian)
                                <option value="{{ $itemPakaian->id }}"
                                    @if (old('pakaian_id', $pembelian->pakaian_id) == $itemPakaian['id']) selected @endif>{{ $itemPakaian['nama'] }}</option>
                            @endforeach
                        </select>


                        <label for="jumlah_pembelian">Masukan Jumlah</label>
                        <input type="text" class="form-control" placeholder="Jumlah" name="jumlah_pembelian" value="{{ $pembelian->jumlah_pembelian}}">

                        <br>


                        <label for="harga_unit">Masukan Harga Unit </label>
                        <input type="text" class="form-control" placeholder="Harga Unit" name="harga_unit" value="{{ $pembelian-> harga_unit}}">

                        <label for="total_pembelian">Masukan Total Harga </label>
                        <input type="text" class="form-control" placeholder="Total Harga" name="total_pembelian" value="{{ $pembelian-> total_pembelian}}">
                        <hr>

                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <a href="{{ url('pembelian') }}" class="btn btn-light">Batal</a>
                    </form>
                </div>
            </div>

        </div>
    </div>
    </div>
@endsection
