<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>@yield('title', 'Default Title')</title>
</head>
<body>
  @yield('navbar')

  <main>
  @if (auth()->check())
    <p>Hola, {{ auth()->user()->name }}!</p>
  @else
    <p>No estás autenticado.</p>
  @endif
    @yield('content')
  </main>

  <footer></footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
