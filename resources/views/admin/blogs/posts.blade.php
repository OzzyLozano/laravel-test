@extends('layouts.app')

@section('title', 'Posts')

@section('navbar')
  @include('components.navbar.blogs')
@endsection

@section('content')
  <h1>List of Posts</h1>
  <a href="{{ route('blogs.create') }}" class="btn btn-primary">Create New Post</a>
  <ul>
    @foreach ($posts as $post)
      <li>
        <a href="{{ route('blogs.show', $post->id) }}">{{ $post->title }}</a>
        <a href="{{ route('blogs.edit', $post->id) }}" class="btn btn-secondary">Edit</a>
        <form action="{{ route('blogs.destroy', $post->id) }}" method="POST" style="display:inline;">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </li>
    @endforeach
  </ul>
@endsection
