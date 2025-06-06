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
  <div id="sky" class="sky"></div>
  <div class="moon">
    <img class="moon-img" src="{{ asset('assets/img/moon.png') }}" alt="moon">
  </div>
  @yield('navbar')

  <main>
    <section class="panel-title-section px-4 py-2">
      @yield('title-section')
      <div class="panel-options">
        <a href="{{ route('blogs.index') }}" class="panel-link">Blogs</a>
        <a href="{{ route('users.index') }}" class="panel-link">Usuarios</a>
      </div>
    </section>
    <section class="panel-content-section">
          @yield('methods')
      @yield('content')
    </section>
  </main>

  @yield('footer')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const imageUrl = "{{ asset('assets/img/star.png') }}";
  </script>
  <script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>
