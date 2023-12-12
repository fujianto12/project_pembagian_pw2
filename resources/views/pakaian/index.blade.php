@extends('layout.main')
@section('title', 'Pakaian')

@section('content')

    <div class="col-12">
        <div class="card">
            <div class="card-header">Tabel Pakaian
                <div class="card-action">
                    <a href="{{ route('pakaian.create') }}">
                        <img src="{{ asset('icons/plus.png') }}" data-toggle="tooltip" title='Tambah Pakaian'
                        >
                    </a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table align-items-center table-flush table-borderless">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Foto</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                        @foreach ($pakaians as $item)
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $item['nama'] }}</td>
                            <td>
                                <img src="https://via.placeholder.com/110x110" class="product-img" alt="product img"></td>
                            <td>{{ $item['harga'] }}</td>
                            <td>{{ $item['stok'] }}</td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <a href="{{ route('pakaian.edit', $item-> id) }}">
                                        <button class="btn btn-xs btn-success btn-rounded show_confirm">
                                            Edit
                                        </button>
                                    </a>
                                    <form action="{{ route('pakaian.destroy', $item->id) }}" method="POST">
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
