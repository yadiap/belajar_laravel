<!doctype html>
<html lang="en">

<head>
  <title>{{ $title}}</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
      <div class="container-fluid">
          <a class="navbar-brand" href="/">{{ env('APP_NAME') }}</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                      <a class="nav-link {{ $title == "Home" ? 'active' : '' }}"" aria-current="page" href="/home">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link {{ $title == "About" ? 'active' : '' }}" aria-current="page" href="/about">About</a>
                  </li>
              </ul>
              <ul class="navbar-nav  mb-2 mb-lg-0">
                  <li class="nav-item">
                      <a class="nav-link active btn" aria-current="page" href="/login">Login</a>
                  </li>
              </ul>
          </div>
      </div>
    </nav>
  </header>
  <main>
    @yield('content')
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
 

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>

</html>