@extends('layouts.main')
@section('title', 'tiket')
@section('artikel')
    <div class="card">
        <div class="card-header">
            <a href="/tiket/form-add" class="btn btn-primary">
                <i class="bi bi-plus-square-dotted"></i> Add tiket
            </a>
        </div>
        <div class="card-body">
            @if (session('alert'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>{{ session('alert') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nomor Kereta</th>
                        <th>Stasiun Asal</th>
                        <th>Stasiun Tujuan</th>
                        <th>Tersedia</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tiket as $idx => $t)
                        <tr>
                            <td>{{ $idx +1}}</td>
                            <td>{{ $t->nomor_kereta }}</td>
                            <td>{{ $t->stasiun_asal }}</td>
                            <td>{{ $t->stasiun_tujuan }}</td>
                            <td>{{ $t->tersedia ? 'Yes' : 'No' }}</td>
                            <td>
                                <img src="{{asset('/storage/'.$t->gambar) }}" alt="{{$t->gambar}}" height="80" width="170">
                            </td>
                            <td>
                                <a href="/form-edit/{{ $t->id}}" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                                <a href="/delete/{{ $t->id}}" class="btn btn-danger"><i class="bi bi-trash3"></i></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
