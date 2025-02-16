@extends('layouts.app')

@section('title', 'Blogs')

@section('navbar')
  @include('components.blogs_navbar')
@endsection

@section('content')
  <h2>This is a Blogs subdomain</h2>
@endsection
