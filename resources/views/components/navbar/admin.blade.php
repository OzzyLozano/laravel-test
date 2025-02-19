@extends('layouts.navbar')

@section('logo')
  @if (auth()->check())
    <a href="{{ env('ADMIN_SUBDOMAIN') }}" class="nav-link"><h2>{{ auth()->user()->name }}</h2></a>
  @else
    <a href="{{ env('ADMIN_SUBDOMAIN') }}" class="nav-link"><h2>Log In</h2></a>
  @endif
@endsection

@section('links')
<a href="{{ env('HOME') }}" class="nav-link">Home</a>
<a href="{{ env('BLOG_SUBDOMAIN') }}" class="nav-link">Blogs</a>
<a href="{{ env('APPS_SUBDOMAIN') }}" class="nav-link">Apps</a>
@endsection
