@extends('layouts.main')
@section('title', 'Form Add Tiket')
@section('artikel')
    <div class="card">
        <div class="card-header">Add New Tiket</div>
        <div class="card-body">
            <form action="/save" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Nomor Kereta</label>
                    <input type="text" name="nomor_kereta" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Stasiun Asal</label>
                    <select name="stasiun_asal" class="form-control">
                        <option value="0">--Pilih Stasiun Asal--</option>
                        <option value="Surabaya">Surabaya</option>
                        <option value="Malang">Malang</option>
                        <option value="Yogyakarta">Yogyakarta</option>
                        <option value="Solo">Solo</option>
                        <option value="Jakarta">Jakarta</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Stasiun Tujuan</label>
                    <select name="stasiun_tujuan" class="form-control" >
                        <option value="0">--Pilih Stasiun Tujuan--</option>
                        <option value="Surabaya">Surabaya</option>
                        <option value="Malang">Malang</option>
                        <option value="Yogyakarta">Yogyakarta</option>
                        <option value="Solo">Solo</option>
                        <option value="Jakarta">Jakarta</option>
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
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection

 