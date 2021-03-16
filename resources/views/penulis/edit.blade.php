@extends('layout/main')

@section('title', 'Detail Buku')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 class="mt-3">Form Edit Data Penulis</h1>

                @foreach ($penulis as $p)
                    <form method="POST" action="/penulis/{{$p->id}}">
                        @method('patch')
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama Penulis</label>
                            <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Penulis" name="nama" value="{{$p->nama}}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan Email" name="email" value="{{$p->email}}">
                            @error('email')
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat Penulis</label>
                            <input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat Penulis" name="alamat" value="{{$p->alamat}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Edit Data</button>
                    </form>
                @endforeach
            </div>
        </div>
    </div>
@endsection
