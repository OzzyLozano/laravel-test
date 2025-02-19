@extends('layouts.app')

@section('title', 'Posts')

@section('navbar')
  @include('components.navbar.blogs')
@endsection

@section('content')
  <h1>Post Id: {{ $post->id }}</h1>
  <a href="{{ route('blogs.index') }}" class="btn btn-primary">All Posts</a>
  <div class="m-4">
    <h2 href="{{ route('blogs.show', $post->id) }}">{{ $post->title }}</h2>
    <p>{{ $post->content }}</p>
    <a href="{{ route('blogs.edit', $post->id) }}" class="btn btn-secondary">Edit</a>
    <form action="{{ route('blogs.destroy', $post->id) }}" method="POST" style="display:inline;">
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-danger">Delete</button>
    </form>
  </div>
@endsection
