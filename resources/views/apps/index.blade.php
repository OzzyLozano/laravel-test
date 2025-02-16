@extends('layouts.app')

@section('title', 'Apps')

@section('navbar')
  @include('components.apps_navbar')
@endsection

@section('content')
  <h2>This is an Apps subdomain</h2>
@endsection
