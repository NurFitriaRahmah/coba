@extends('layout/main')

@section('title', 'Detail Buku')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 class="mt-3">Form Tambah Data Buku</h1>

                <form method="POST" action="/book">
                    @csrf
                    <div class="form-group">
                        <label for="title">Judul Buku</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Judul Buku" name="title" value="{{old('title')}}">
                        @error('title')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Deskripsi Buku</label>
                        <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" placeholder="Deskripsi Buku" name="description" value="{{old('description')}}">
                        @error('description')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="publisher">Penerbit</label>
                        <input type="text" class="form-control @error('publisher') is-invalid @enderror" id="publisher" placeholder="Nama Penerbit" name="publisher" value="{{old('publisher')}}">
                        @error('publisher')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="qty">Jumlah Buku</label>
                        <input type="number" class="form-control @error('qty') is-invalid @enderror" id="qty" placeholder="Jumlah Buku" name="qty" value="{{old('qty')}}">
                        @error('qty')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
@endsection
