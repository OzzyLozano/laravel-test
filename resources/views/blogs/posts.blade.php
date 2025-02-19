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
        @if (auth()->check() && auth()->user()->email === 'ing.oziellozano@gmail.com')
          <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-secondary">Edit</a>
          <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
        @endif
      </li>
    @endforeach
  </ul>
@endsection
