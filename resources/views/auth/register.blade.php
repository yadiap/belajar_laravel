<html lang="en"><head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.108.0">
  <title>{{$title}}</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <!-- Favicons -->

  <meta name="theme-color" content="#712cf9">


  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      height: 3rem;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }
  </style>

  
  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="{{ asset('signin.css') }}">


</head>
<body class="text-center">
  
<main class="form-signin w-100 m-auto">
<form action="/register" method="POST">
  @csrf
  <img class="mb-4" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQpaqBJzhY1_nTTwxTuN803wI-DC4OXjXqPx3UFc0XlERNGQ8HwXImt1jpsE_Z7UT-GxfY" alt="" width="72" height="57">
  <h1 class="h3 mb-3 fw-normal">Register account</h1>

  <div class="form-floating">
    <input type="text" class="form-control @error ('name') is-invalid @enderror" id="nama" placeholder="Masukkan nama anda" name="name" value="{{old('name')}}">
    <label for="nama">  Nama @error ('name') {{ $message }} @enderror </label>
  </div>
  <div class="form-floating">
    <input type="email" class="form-control @error ('email') is-invalid @enderror" id="email" placeholder="Masukkan email anda : name@example.com" name="email" value="{{ old('email') }}">
    <label for="email">Email address @error ('email') {{ $message }} @enderror </label>
  </div>

  <div class="form-floating">
    <input type="password" class="form-control @error ('password') is-invalid @enderror" id="password" placeholder="Password" name="password">
    <label for="password">Password @error ('password') {{ $message }} @enderror </label>
  </div>

  <div class="form-floating">
    <input type="password" class="form-control @error ('password_confirmation') is-invalid @enderror" id="confirm_password" placeholder="Password" name="password_confirmation">
    <label for="confirm_password">Confirm Password @error ('password_confirmation') {{ $message }} @enderror</label>
  </div>


  <x-button class="mt-2 w-100 btn-lg" type="submit" text="Buat Akun" />
  <a class="mt-2 w-100 btn btn-lg btn-primary" type="submit" href="/login">Login</a>
  <a class="mt-2 w-100 btn btn-lg btn-primary" type="submit" href="/home">Kembali ke Home</a>
  <p class="mt-5 mb-3 text-muted">© 2017–2022</p>
</form>
</main>
</body>
</html>