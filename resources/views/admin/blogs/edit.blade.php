@extends('layouts.app')

@section('title', 'Posts')

@section('navbar')
  @include('components.navbar.admin')
@endsection

@section('title-section')
  <h1>Edit Post</h1>
@endsection

@section('content')
    <form action="{{ route('blogs.update', $post->id) }}" method="POST">
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
