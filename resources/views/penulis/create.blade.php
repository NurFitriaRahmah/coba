@extends('layout/main')

@section('title', 'Detail Buku')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 class="mt-3">Form Tambah Data Penulis</h1>

                <form method="POST" action="/penulis">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama Penulis</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Penulis" name="nama" value="{{old('nama')}}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email Penulis</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan Email" name="email" value="{{old('email')}}">
                        @error('email')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat Penulis</label>
                        <input type="text" class="form-control" id="alamat" placeholder="Alamat Penerbit" name="alamat" value="{{old('alamat')}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
@endsection
