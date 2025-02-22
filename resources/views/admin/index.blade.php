@extends('layouts.admin')


@if (auth()->check())
  @section('title', auth()->user()->name)
@else
  @section('title', 'Admin')
@endif

@section('navbar')
  @include('components.navbar.admin')
@endsection

@section('title-section')
  <h2 class="mb-2">Admin page</h2>
@endsection

@section('content')
  
@endsection
