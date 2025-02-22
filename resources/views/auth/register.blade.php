<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Register</title>
</head>
<body>
  <main class="d-flex flex-column justify-content-center align-items-center min-vh-100">
  @if (auth()->check() && auth()->user()->email === 'ing.oziellozano@gmail.com')
    <div class="card p-4 shadow-sm b-none">
    <h2 class="mx-auto">Register</h2>
      <form action="{{ route('register') }}" method="post">
        @csrf
        <div class="form-group mb-3">
          <label for="name" :value="__('Name')">Name</label>
          <input class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name">
          @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <!-- <div class="form-group mb-3">
          <label for="role">Role:</label>
          <select name="role" class="form-control" id="role">
            <option value="user">user</option>
            <option value="admin">admin</option>
            <option value="creator">creator</option>
            <option value="editor">editor</option>
          </select>
        </div> -->
        <div class="form-group mb-3">
          <label for="email" :value="__('Email')">Email address</label>
          <input class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username">
          @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group mb-3">
          <label for="password" :value="__('Password')">Password</label>
          <input class="form-control" type="password" name="password" required autocomplete="new-password">
          @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group mb-3">
          <label for="password_confirmation" :value="__('Confirm Password')">Confirm Password</label>
          <input class="form-control" type="password" name="password_confirmation" required autocomplete="new-password">
        </div>
        <div class="d-flex flex-row justify-content-end align-items-center gap-4">
          <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
            {{ __('Already registered?') }}
          </a>
          <button type="submit" class="btn btn-primary">Register</button>
        </div>
      </form>
    </div>
    @else
    <h1>Necesitas estar autenticado para registrar usuarios.</h1>
    @endif
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
