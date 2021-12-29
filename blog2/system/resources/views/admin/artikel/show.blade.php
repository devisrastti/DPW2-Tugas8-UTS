@extends('template.admin')

@section('content')

<div class="card">
    <div class="card-body">
        <h3>Judul Artikel : {{$artikel->judul}}</h3>

        <h5>
            Kategori : {{$artikel->kategori}} | Nama : {{$artikel->nama}}
        </h5>

        <hr>

        <h6>{{$artikel->isi}}</h6>
        <p>
            {!! nl2br($artikel->content) !!}
        </p>
    </div>
</div>

@endsection