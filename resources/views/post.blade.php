@extends('layouts.main')

@section('container')
  <h1>{{ $post->title }}</h1>

  <p>By. MF Haris <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
  
  {!! $post->body !!}

<a href="/posts">Back To Blog</a>

@endsection