@extends('layouts.app')

@section('title', 'Blogs')

@section('navbar')
  @include('components.navbar.blogs')
@endsection

@section('title-section')
  <h2>This is a Blogs subdomain</h2>
@endsection

@section('content')
  <a href="{{ route('posts.index') }}">Ver publicaciones</a>
@endsection
