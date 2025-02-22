@extends('layouts.app')

@section('title', 'Posts')

@section('navbar')
  @include('components.navbar.admin')
@endsection

@section('title-section')
  <h1>Post Id: {{ $post->id }}</h1>
  <a href="{{ route('blogs.index') }}" class="d-inline-flex btn btn-primary align-items-center gap-2">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
    </svg>
    All Posts
  </a>
@endsection

@section('content')
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
