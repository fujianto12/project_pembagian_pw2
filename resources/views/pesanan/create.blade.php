@extends('layout.main')
@section('title', 'pesanan')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form class="forms-sample" method="POST" action="{{ route('pesanan.store') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <h4 class="card-title">Tambah Pesanan</h4>

                        <label for="nomor_pesanan">Masukan Nomor Pesan</label>
                        <input type="text" class="form-control" placeholder="Nomor Pesan" name="nomor_pesanan">

                        <br>

                        <select name="costumer_id" class="form-control">
                            <option value="">Pilih Nama</option>
                            @foreach ($costumer as $itemCostumer)
                                <option value="{{ $itemCostumer->id }}">{{ $itemCostumer['nama'] }}</option>
                            @endforeach
                        </select>

                        <br>

                        <label for="tanggal_pesanan">Masukan Tanggal Pesan</label>
                        <input type="date" class="form-control" placeholder="Tanggal Pesan" name="tanggal_pesanan">

                        <br>

                        <select name="pakaian_id" class="form-control">
                            <option value="">Pilih Nama Pakaian</option>
                            @foreach ($pakaian as $itemPakaian)
                                <option value="{{ $itemPakaian->id }}">{{ $itemPakaian['nama'] }}</option>
                            @endforeach
                        </select>

                        <label for="jumlah_pesanan">Masukan Jumlah</label>
                        <input type="text" class="form-control" placeholder="Jumlah Pesanan" name="jumlah_pesanan">

                        <label for="total_harga">Masukan Total Harga </label>
                        <input type="text" class="form-control" placeholder="Total Harga" name="total_harga">
                        <hr>

                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <a href="{{ url('pesanan') }}" class="btn btn-light">Batal</a>
                    </form>
                </div>
            </div>

        </div>
    </div>
    </div>
@endsection
