@extends('layouts.app')

@section('title', 'Blogs')

@section('navbar')
  @include('components.navbar.blogs')
@endsection

@section('content')
  <h2>This is a Blogs subdomain</h2>

  <a href="{{ route('posts.index') }}">Ver publicaciones</a>
@endsection
