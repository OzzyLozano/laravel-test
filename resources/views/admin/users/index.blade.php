@extends('layouts.admin')

@section('title', 'Edit User')

@section('navbar')
  @include('components.navbar.admin')
@endsection

@section('title-section')
  <div class="d-flex gap-2 align-items-center mb-2">
    <!-- <a href="{{ env('ADMIN_SUBDOMAIN') }}" class="btn btn-primary p-0 back-arrow">
      <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-left back-arrow-icon">
        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
      </svg>
    </a> -->
    <h2>Users</h2>
  </div>
@endsection

@section('content')
  @section('methods')
    @if (auth()->check())
      <a class="btn button-primary my-2" href="{{ env('HOME') . '/register' }}">New User</a>
    @endif
  @endsection
  @if (auth()->check() && auth()->user()->role === 'admin')
    <div class="table-responsive">
      <table class="table table-dark table-hover">
        <thead>
          <tr class="table-active">
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">E-mail</th>
            <th scope="col">Role</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
          @foreach ($users as $_user)
            <tr>
              <th scope="row">{{ $_user->id }}</th>
              <td>{{ $_user->name }}</td>
              <td>{{ $_user->email }}</td>
              <td>{{ $_user->role }}</td>
              <td>
                @if ($_user->email === 'ing.oziellozano@gmail.com')
                @else
                <form action="{{ route('users.edit', $_user->id) }}" method="GET" style="display: inline;">
                    @csrf
                    <button type="submit" class="btn button-primary">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen d-block" viewBox="0 0 16 16">
                        <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z"/>
                      </svg>
                    </button>
                </form>
                @endif
              </td>
              <td>
                @if ($_user->email === 'ing.oziellozano@gmail.com')
                @else
                <form action="{{ route('users.destroy', $_user->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn button-secondary">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3 d-block" viewBox="0 0 16 16">
                        <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                      </svg>
                    </button>
                </form>
                @endif
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  @else
    <h1>No tienes permisos.</h1>
  @endif
@endsection
