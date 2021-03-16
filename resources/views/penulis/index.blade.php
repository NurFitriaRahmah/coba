@extends('layout/main')

@section('title', 'Daftar-Penulis')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-3">Daftar Penulis</h1>

                <a href="/penulis/create" class="btn btn-primary my-3">Tambah Data Penulis</a>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <ul class="list-group">
                    @foreach ($penulis as $p)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{$p->nama}}
                            <a href="/penulis/{{$p->id}}" class="badge badge-info">Detail</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
