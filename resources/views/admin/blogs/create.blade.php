@extends('layouts.app')

@section('title', 'Posts')

@section('navbar')
  @include('components.navbar.admin')
@endsection

@section('title-section')
  <h1>Create a New Post</h1>
  <a href="{{ url()->previous() }}" class="d-inline-flex btn btn-primary align-items-center gap-2">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
    </svg>
    return
  </a>
@endsection

@section('content')
    <form action="{{ route('blogs.store') }}" method="POST">
        @csrf
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" id="description" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="content">Content:</label>
            <textarea name="content" id="content" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
@endsection
