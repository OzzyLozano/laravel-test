@extends('layouts.app')

@section('title', 'Posts')

@section('navbar')
  @include('components.navbar.blogs')
@endsection

@section('title-section')
  <h1>List of Posts</h1>
@endsection

@section('content')
  <ul class="posts-list d-flex flex-column justify-content-center gap-4">
    @foreach ($posts as $post)
      <li class="post-item d-flex shadow rounded">
        <div class="blog-icon"></div>
        <div class="d-flex flex-column">
          <h2 class="post-title">{{ $post->title }}</h2>
          <p class="post-description overflow-scroll">{{ $post->description }}</p>
          <a class="post-link d-block" href="{{ route('posts.show', $post->id) }}">Ver publicación</a>
        </div>
      </li>
    @endforeach
  </ul>
@endsection
