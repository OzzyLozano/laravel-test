@extends('layouts.app')

@section('title', 'Posts')

@section('navbar')
  @include('components.navbar.admin')
@endsection

@section('title-section')
  <div class="pt-4 px-4">
    <a href="{{ route('blogs.index') }}" class="d-inline-flex align-items-center gap-2 link-underline">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
      </svg>
      All Posts
    </a>
    <h1>Edit Post</h1>
  </div>
@endsection

@section('content')
    <form action="{{ route('blogs.update', $post->id) }}" method="POST" class="mx-4">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $post->title }}">
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" id="description" class="form-control">{{ $post->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="content">Content:</label>
            <textarea name="content" id="content" class="form-control">{{ $post->content }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
@endsection
