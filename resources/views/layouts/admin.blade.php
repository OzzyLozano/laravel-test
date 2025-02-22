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
  @yield('navbar')

  <main>
    <section class="panel-title-section bg-primary-subtle px-4 py-2">
      @yield('title-section')
      <div class="d-flex flex-column gap-1">
        <a href="{{ route('blogs.index') }}" class="panel-link">Blogs</a>
        <div class="ms-4">
          @yield('blog-methods')
        </div>
        <a href="{{ route('users.index') }}" class="panel-link">Usuarios</a>
        <div class="ms-4">
          @yield('user-methods')
        </div>
      </div>
    </section>
    <section class="panel-content-section">
      @yield('content')
    </section>
  </main>

  @yield('footer')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
