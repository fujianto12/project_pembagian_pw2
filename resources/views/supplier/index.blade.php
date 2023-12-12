@extends('layout.main')
@section('title', 'Supplier')

@section('content')

    <div class="col-12 col-lg-12">
        <div class="card">
            <div class="card-header">Tabel Supplier
                <div class="card-action">
                    <a href="{{ route('supplier.create') }}">
                        <img src="{{ asset('icons/plus.png') }}" data-toggle="tooltip" title='Tambah Supplier'
                        >
                    </a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table align-items-center table-flush table-borderless">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Kota</th>
                            <th>Kode Pos</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                        @foreach ($suppliers as $item)
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $item['nama'] }}</td>
                            <td>{{ $item['alamat'] }}</td>
                            <td>{{ $item['kota'] }}</td>
                            <td>{{ $item['kode_pos'] }}</td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <a href="{{ route('supplier.edit', $item-> id) }}">
                                        <button class="btn btn-xs btn-success btn-rounded show_confirm">
                                            Edit
                                        </button>
                                    </a>
                                    <form action="{{ route('supplier.destroy', $item->id) }}" method="POST">
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
