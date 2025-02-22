@extends('layouts.app')

@section('title', 'Edit Users')

@section('navbar')
  @include('components.navbar.admin')
@endsection

@section('title-section')
  <a href="{{ url()->previous() }}" class="d-inline-flex btn btn-primary align-items-center gap-2">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
    </svg>
    Go Back
  </a>
  <h2>{{ $user->email }}</h2>
@endsection

@section('content')
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}">
        </div>
        <div class="form-group">
          <label for="role">Role:</label>
          <select name="role" class="form-control" id="role">
            <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>user</option>
            <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>admin</option>
            <option value="creator" {{ $user->role == 'creator' ? 'selected' : '' }}>creator</option>
            <option value="editor" {{ $user->role == 'editor' ? 'selected' : '' }}>editor</option>
          </select>
          <p>Current role: {{ $user->role }}</p>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
@endsection
