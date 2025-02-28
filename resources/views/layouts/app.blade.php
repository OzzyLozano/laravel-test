<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
  <title>@yield('title', 'Default Title')</title>
</head>
<body>
  <div class="moon"></div>
  <img class="moon" src="{{ asset('assets/img/moon.png') }}" alt="moon">
  @yield('navbar')

  <main>
    <section class="mx-4 my-2">
      @yield('title-section')
    </section>
    <section class="mx-4 my-2">
      @yield('content')
    </section>
    <!-- @if (auth()->check())
      <p>Hola, {{ auth()->user()->name }}!</p>
    @else
      <p>No estás autenticado.</p>
    @endif -->
  </main>

  @yield('footer')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
