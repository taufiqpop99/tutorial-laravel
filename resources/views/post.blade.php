@extends('layouts/main')
@section('container')
    <article>
        <h2 class="mb-5">{{ $post->title }}</h2>

        <p>By. <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> in <a
                href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
        </p>

        <h5>{{ $post->author }}</h5>
        {!! $post->body !!}
    </article>

    <a href="/blog" class="d-block mt-3 text-decoration-none">Back To Blog</a>
@endsection
