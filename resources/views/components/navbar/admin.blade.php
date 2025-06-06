@extends('layouts.navbar')

@section('logo')
  @if (auth()->check())
    <a href="{{ env('ADMIN_URL') }}" class="nav-link"><h2>{{ auth()->user()->name }}</h2></a>
  @else
    <a href="{{ route('login') }}" class="nav-link"><h2>Log In</h2></a>
  @endif
@endsection

@section('links')
@endsection
