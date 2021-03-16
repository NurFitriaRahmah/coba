@extends('layout/main')

@section('title', 'Detail Buku')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-3">Detail Buku</h1>

                <div class="card">
                    <div class="card-body">
                        @foreach ($book as $p)
                            <h5 class="card-title">{{$p->title}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{$p->description}}</h6>
                            <p class="card-text">{{$p->publisher}}</p>
                            <p class="card-text">{{$p->qty}}</p>

                            <a href="{{ $p->id }}/edit"><button type="submit" class="btn btn-primary">Edit</button></a>
                            <form action="/book/{{ $p->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                            <a href="/book" class="card-link">Kembali</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
