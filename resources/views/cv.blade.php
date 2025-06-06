@extends('layouts.app')

@section('title', 'Posts')

@section('navbar')
  @extends('layouts.navbar')

  @section('logo')
    <a href="" class="nav-link"><h2>OZIEL LOZANO CANDILA</h2></a>
  @endsection

  @section('links')
    <a href="{{ env('HOME_URL') }}" class="nav-link">Home</a>
    <a href="{{ env('BLOG_URL') }}" class="nav-link">Blogs</a>
  @endsection
@endsection

@section('title-section')
@endsection

@section('content')
@endsection
