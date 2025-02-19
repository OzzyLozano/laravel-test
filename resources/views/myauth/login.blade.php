<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Log In</title>
</head>
<body>
  <main class="d-flex flex-column justify-content-center align-items-center min-vh-100">
    <div class="card p-4 shadow-sm b-none">
    <h2 class="mx-auto">Log In</h2>
      <form action="{{ route('login') }}" method="post">
        @csrf
        <div class="form-group mb-4">
          <label for="email">Email address</label>
          <input type="email" class="form-control" name="email" required placeholder="Enter email">
        </div>
        <div class="form-group mb-4">
          <label for="password">Password</label>
          <input type="password" class="form-control" name="password" required placeholder="Password">
        </div>
        <div class="d-flex flex-row justify-content-end align-items-center gap-4">
          @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
              {{ __('Forgot your password?') }}
            </a>
          @endif
          <button type="submit" class="btn btn-primary">Log In</button>
        </div>
      </form>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
