@extends('layout.main')
@section('title', 'Pembelian')

@section('content')

    <div class="col-12 col-lg-12">
        <div class="card">
            <div class="card-header">Tabel Pembeli
                <div class="card-action">
                    <a href="{{ route('pembelian.create') }}">
                        <img src="{{ asset('icons/plus.png') }}" data-toggle="tooltip" title='Tambah Pembelian'>
                    </a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table align-items-center table-flush table-borderless">
                    <thead>
                        <tr>
                            <th>Nama Supplier</th>
                            <th>Nama Pakaian</th>
                            <th>Tanggal Pembelian</th>
                            <th>Jumlah</th>
                            <th>Harga Unit</th>
                            <th>Total</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                        @foreach ($pembelians as $item)
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $item['supplier']['nama'] }}</td>
                            <td>{{ $item['pakaian']['nama'] }}</td>
                            <td>{{ $item['tanggal_pembelian'] }}</td>
                            <td>{{ $item['jumlah_pembelian'] }}</td>
                            <td>{{ $item['harga_unit'] }}</td>
                            <td>{{ $item['total_pembelian'] }}</td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <a href="{{ route('pembelian.edit', $item->id) }}">
                                        <button class="btn btn-xs btn-success btn-rounded show_confirm">
                                            Edit
                                        </button>
                                    </a>
                                    <form action="{{ route('pembelian.destroy', $item->id) }}" method="POST">
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
