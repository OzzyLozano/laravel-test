@extends('layouts.app')

@section('title', 'Posts')

@section('navbar')
  @include('components.navbar.blogs')
@endsection

@section('content')
  <h1>List of Posts</h1>
  <ul>
    @foreach ($posts as $post)
      <li>
        <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
      </li>
    @endforeach
  </ul>
@endsection
