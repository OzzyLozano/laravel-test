<nav class="navbar px-3">
  @yield('logo')
  <div class="nav-container align-items-center">
    @yield('links')
    @auth
      <form action="{{ url('/logout') }}" method="post" class="d-inline">
        @csrf
        <button type="submit" class="btn button-secondary p-2">Log Out</button>
      </form>
    @else
      <a href="{{ env('HOME_URL') . '/login' }}" class="btn button-primary p-2">Log In</a>
    @endauth
  </div>
</nav>
