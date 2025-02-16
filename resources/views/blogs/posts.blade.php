@extends('layouts.app')

@section('title', 'Posts')

@section('navbar')
  @include('components.blogs_navbar')
@endsection

@section('content')
  <h1>List of Posts</h1>
  <a href="{{ route('posts.create') }}" class="btn btn-primary">Create New Post</a>
  <ul>
    @foreach ($posts as $post)
      <li>
        <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-secondary">Edit</a>
        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </li>
    @endforeach
  </ul>
@endsection
