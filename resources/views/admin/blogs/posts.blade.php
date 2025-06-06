@extends('layouts.admin')

@section('title', 'Blogs')

@section('navbar')
  @include('components.navbar.admin')
@endsection

@section('title-section')
  <div class="d-flex gap-2 align-items-center mb-2">
    <!-- <a href="{{ env('ADMIN_URL') }}" class="btn btn-primary p-0 back-arrow">
      <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-left back-arrow-icon">
        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
      </svg>
    </a> -->
    <h2>Blogs</h2>
  </div>
@endsection

@section('content')
  @section('methods')
    @if (auth()->check())
      <a href="{{ route('blogs.create') }}" class="btn button-primary my-2">New Blog</a>
    @endif
  @endsection
  <ul class="posts-list d-flex flex-column justify-content-center gap-4">
    @foreach ($posts as $post)
      <li class="post-item d-flex shadow rounded">
        <div class="blog-icon"></div>
        <div class="d-flex flex-column">
          <h2 class="post-title">{{ $post->title }}</h2>
          <p class="post-description overflow-scroll">{{ $post->description }}</p>
          <a class="post-link d-block" href="{{ route('blogs.show', $post->id) }}">Ver publicación</a>
          @if (auth()->check())
            <div>
              <a href="{{ route('blogs.edit', $post->id) }}" class="btn button-primary">Edit</a>
              <form action="{{ route('blogs.destroy', $post->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn button-secondary">Delete</button>
              </form>
            </div>
          @endif
        </div>
      </li>
    @endforeach
  </ul>
@endsection
