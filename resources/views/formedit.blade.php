@extends('layouts.main')
@section('title', 'Form Add Tiket')
@section('artikel')
    <div class="card">
        <div class="card-header">Add New Tiket</div>
        <div class="card-body">
            <form action="/update/{{ $tiket->id}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Nomor Kereta</label>
                    <input type="text" name="nomor_kereta" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Stasiun Asal</label>
                    <select name="stasiun_asal" class="form-control">
                        <option value="0">--Pilih Stasiun Asal--</option>
                        <option value="Surabaya" {{ ($tiket->stasiun_asal == "Surabaya") ? "selected":""}}>Surabaya</option>
                        <option value="Malang" {{ ($tiket->stasiun_asal == "Malang") ? "selected":""}}>Malang</option>
                        <option value="Yogyakarta" {{ ($tiket->stasiun_asal == "Yogyakarta") ? "selected":""}}>Yogyakarta</option>
                        <option value="Solo" {{ ($tiket->stasiun_asal == "Solo") ? "selected":""}}>Solo</option>
                        <option value="Jakarta" {{ ($tiket->stasiun_asal == "Jakarta") ? "selected":""}}>Jakarta</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Stasiun Tujuan</label>
                    <select name="stasiun_tujuan" class="form-control" >
                        <option value="0">--Pilih Stasiun Tujuan--</option>
                        <option value="Surabaya" {{ ($tiket->stasiun_tujuan == "Surabaya") ? "selected":""}}>Surabaya</option>
                        <option value="Malang" {{ ($tiket->stasiun_tujuan == "Malang") ? "selected":""}}>Malang</option>
                        <option value="Yogyakarta" {{ ($tiket->stasiun_tujuan == "Yogyakarta") ? "selected":""}}>Yogyakarta</option>
                        <option value="Solo" {{ ($tiket->stasiun_tujuan == "Solo") ? "selected":""}}>Solo</option>
                        <option value="Jakarta" {{ ($tiket->stasiun_tujuan == "Jakarta") ? "selected":""}}>Jakarta</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Tersedia</label>
                    <select name="tersedia" class="form-control" >
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Gambar</label>
                    <input type="file" accept="image/*" name="gambar" class="form-control" required>
                </div>
                <div class="form-group">
                    <img src="{{asset('/storage/'.$tiket->gambar) }}" alt="{{$tiket->gambar}}" height="80" width="170">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection

 b  