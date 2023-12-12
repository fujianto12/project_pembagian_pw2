@extends('layout.main')
@section('title', 'Pesanan')

@section('content')

    <div class="col-12 col-lg-12">
        <div class="card">
            <div class="card-header">Tabel Pesanan
                <div class="card-action">
                    <a href="{{ route('pesanan.create') }}">
                        <img src="{{ asset('icons/plus.png') }}" data-toggle="tooltip" title='Tambah Pesanan'
                        >
                    </a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table align-items-center table-flush table-borderless">
                    <thead>
                        <tr>
                            <th>Nomor Pesan</th>
                            <th>Nama Costumer</th>
                            <th>Tanggal Pesan</th>
                            <th>Nama Pakaian</th>
                            <th>Jumlah</th>
                            <th>Total Harga</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                        @foreach ($pesanans as $item)
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $item['nomor_pesanan'] }}</td>
                            <td>{{ $item['costumer']['nama'] }}</td>
                            <td>{{ $item['tanggal_pesanan'] }}</td>
                            <td>{{ $item['pakaian']['nama'] }}</td>
                            <td>{{ $item['jumlah_pesanan'] }}</td>
                            <td>{{ $item['total_harga'] }}</td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <a href="{{ route('pesanan.edit', $item-> id) }}">
                                        <button class="btn btn-xs btn-success btn-rounded show_confirm">
                                            Edit
                                        </button>
                                    </a>
                                    <form action="{{ route('pesanan.destroy', $item->id) }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-xs btn-danger btn-rounded show_confirm"
                                            data-toggle="tooltip" title='Delete'
                                            data-nama='{{ $item->nama }}'>Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
