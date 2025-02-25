@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow-lg">
                <div class="card-header">
                    <div class="float-start">
                        Kategori
                    </div>
                    <div class="float-end">
                        <form action="{{ route('kategori.view-pdf') }}" method="POST">
                            @csrf
                            <a href="{{ route('kategori.create') }}" class="btn btn-sm btn-outline-primary">Tambah
                                Data</a>
                        </form>
                    </div>
                </div>

                <div class="card-body" >
                    <div class="alert alert-warning" role="alert">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>deskripsi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @forelse ($kategori as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->nama }}</td>
                                    <td>{{ $data->deskripsi}}</td>
                                    </td>
                                    <td>
                                        <form action="{{ route('kategori.destroy', $data->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('kategori.edit', $data->id) }}"
                                                class="btn btn-sm btn-outline-success">Edit</a>
                                            <button type="submit" onsubmit="return confirm('Are You Sure ?');"
                                                class="btn btn-sm btn-outline-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="text-center">
                                        Data data belum Tersedia.
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                        {!! $kategori->withQueryString()->links('pagination::bootstrap-4') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
