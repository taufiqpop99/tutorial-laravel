@extends('layouts.main')

@section('judul')
    <article>
        <h2>{{ $post['title'] }}</h2>
        <h5>{{ $post['author'] }}</h5>
        <p>{{ $post['body'] }}</p>
    </article>

    <a href="/posts">Back To Post</a>
@endsection
