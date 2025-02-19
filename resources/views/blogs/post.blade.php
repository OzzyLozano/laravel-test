@extends('layouts.app')

@section('title', 'Posts')

@section('navbar')
  @include('components.navbar.blogs')
@endsection

@section('content')
  <h1>Post Id: {{ $post->id }}</h1>
  <a href="{{ route('posts.index') }}" class="btn btn-primary">All Posts</a>
  <div class="m-4">
    <h2 href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</h2>
    <p>{{ $post->content }}</p>
  </div>
@endsection
