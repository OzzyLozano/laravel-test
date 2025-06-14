<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>To Do List</title>
</head>
<body>
  <nav class="navbar px-3 bg-primary">
    <h2 class="nav-title">To-Do List</h2>
    <div class="nav-container">
      <a href="{{ env('HOME_URL') }}" class="nav-link">home</a>
    </div>
    <button type="button" class="btn bg-primary-subtle p-2 d-none">Log In</button>
  </nav>
  <main></main>
  <footer></footer>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
