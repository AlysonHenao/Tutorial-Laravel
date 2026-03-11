<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
  <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
  <title>@yield('title', 'Demon Manager')</title>
</head>
<body>
  <!-- header -->
  <nav class="navbar navbar-expand-lg navbar-dark py-4" style="background-color: #390505;">
    <div class="container">
      <a class="navbar-brand" href="{{ route('demon.home') }}">Demon Manager</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
          <a class="nav-link active" href="{{ route('demon.home') }}">Home</a>
          <a class="nav-link active" href="{{ route('demon.create') }}">Register Demon</a>
          <a class="nav-link active" href="{{ route('demon.index') }}">List Demons</a>
          <a class="nav-link active" href="{{ route('demon.stats') }}">Statistics</a>
        </div>
      </div>
    </div>
  </nav>

  <header class="masthead text-white text-center py-4" style="background-color: #7B0000;">
    <div class="container d-flex align-items-center flex-column">
      <h2>@yield('subtitle', 'Demon Manager System')</h2>
    </div>
  </header>
  <!-- header -->

  <div class="container my-4">
    @yield('content')
  </div>

  <!-- footer -->
  <div class="py-4 text-center text-white" style="background-color: #390505;">
    <div class="container">
      <small>Demon Manager - Software Architecture</small>
    </div>
  </div>
  <!-- footer -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
  </script>
</body>
</html>