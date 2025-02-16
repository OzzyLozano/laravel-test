<nav class="navbar px-3 bg-primary">
  <a href="{{ env('APPS_SUBDOMAIN') }}" class="nav-link"><h2>Apps</h2></a>
  <div class="nav-container">
    <a href="{{ env('HOME') }}" class="nav-link">Home</a>
    <a href="{{ env('BLOG_SUBDOMAIN') }}" class="nav-link">Blogs</a>
  </div>
  <button type="button" class="btn bg-primary-subtle p-2 d-none">Log In</button>
</nav>
