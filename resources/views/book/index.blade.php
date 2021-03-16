@extends('layout/main')

@section('title', 'Daftar-Buku')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-3">Daftar Buku</h1>

                <a href="/book/create" class="btn btn-primary my-3">Tambah Data Buku</a>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <ul class="list-group">
                    @foreach ($book as $p)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{$p->title}}
                            <a href="/book/{{$p->id}}" class="badge badge-info">Detail</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
