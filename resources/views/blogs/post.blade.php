@extends('layouts.app')

@section('title', 'Posts')

@section('navbar')
  @include('components.navbar.blogs')
@endsection

@section('title-section')
  <div class="pt-4 px-4">
    <a href="{{ route('posts.index') }}" class="d-inline-flex align-items-center gap-2 link-underline">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
      </svg>
      All Posts
    </a>
  </div>
@endsection

@section('content')
  <div class="m-4 d-flex flex-column gap-4 justify-content-center">
    <h2 class="fs-1">{{ $post->title }}</h2>
    <p class="fs-5">{{ $post->content }}</p>
  </div>
@endsection
