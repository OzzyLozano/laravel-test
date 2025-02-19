@extends('layouts.app')


@if (auth()->check())
  @section('title', auth()->user()->name)
@else
  @section('title', 'Admin')
@endif


@section('navbar')
  @include('components.navbar.admin')
@endsection

@section('content')
  <h2>Admin page</h2>

  <!-- @if (auth()->check())
    <a>Ir a pulicaciones</a>
  @else
    <p>Inicie sesion para ver las publicaciones.</p>
  @endif -->
  
  <a href="{{ route('blogs.index') }}">Ir a blogs</a>
@endsection
