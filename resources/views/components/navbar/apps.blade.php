@extends('layouts.navbar')

@section('logo')
  <a href="{{ env('APPS_SUBDOMAIN') }}" class="nav-link"><h2>Apps</h2></a>
@endsection

@section('links')
  <a href="{{ env('HOME') }}" class="nav-link">Home</a>
  <a href="{{ env('BLOG_SUBDOMAIN') }}" class="nav-link">Blogs</a>
@endsection
