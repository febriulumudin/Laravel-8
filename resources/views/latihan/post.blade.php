@extends('layouts/main')

@section('container')

   <article>
        <h2>{{ $posts["title"] }}</h2>
        <h5>By : {{ $posts["author"] }}</h5>
        <p>{{ $posts["post"] }}</p>
    </article>
    <a href="/posts">Kembali</a>

@endsection