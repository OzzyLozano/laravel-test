@extends('layouts.navbar')

@section('logo')
  <a href="{{ env('APPS_URL') }}" class="nav-link"><h2>Apps</h2></a>
@endsection

@section('links')
  <a href="{{ env('HOME_URL') }}" class="nav-link">Home</a>
  <a href="{{ env('BLOG_URL') }}" class="nav-link">Blogs</a>
  @if (auth()->check() && auth()->user()->email === 'ing.oziellozano@gmail.com')
    <a href="{{ env('ADMIN_URL') }}" class="nav-link">Admin</a>
  @endif
@endsection
