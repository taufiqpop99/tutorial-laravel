@extends('layouts.main')

@section('judul')
    <article>
        <h1 class="mb-5">{{ $post->title }}</h1>
        <p>By. Taufiq Pop in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        {!! $post->body !!}
    </article>

    <a href="/posts">Back To Post</a>
@endsection
