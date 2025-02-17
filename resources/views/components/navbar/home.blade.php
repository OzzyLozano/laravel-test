@extends('layouts.navbar')

@section('logo')
  <a href="{{ env('HOME') }}" class="nav-link"><h2>Homepage</h2></a>
@endsection

@section('links')
  <a href="{{ env('BLOG_SUBDOMAIN') }}" class="nav-link">Blogs</a>
  <a href="{{ env('APPS_SUBDOMAIN') }}" class="nav-link">Apps</a>
@endsection
