<nav class="navbar px-3 bg-primary">
  @yield('logo')
  <div class="nav-container align-items-center">
    @yield('links')
    @auth
      <form action="{{ url('/logout') }}" method="post" class="d-inline">
        @csrf
        <button type="submit" class="btn bg-danger-subtle p-2">Log Out</button>
      </form>
    @else
      <a href="{{ env('HOME') . '/login' }}" class="btn bg-primary-subtle p-2">Log In</a>
    @endauth
    <a href="{{ env('ADMIN_SUBDOMAIN') }}">admin?</a>
  </div>
</nav>
