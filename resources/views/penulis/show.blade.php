@extends('layout/main')

@section('title', 'Detail Buku')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-3">Detail Penulis</h1>

                <div class="card">
                    <div class="card-body">
                        @foreach ($penulis as $p)
                            <h5 class="card-title">{{$p->nama}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{$p->email}}</h6>
                            <p class="card-text">{{$p->alamat}}</p>

                            <a href="{{ $p->id }}/edit"><button type="submit" class="btn btn-primary">Edit</button></a>
                            <form action="/penulis/{{ $p->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                            <a href="/penulis" class="card-link">Kembali</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
