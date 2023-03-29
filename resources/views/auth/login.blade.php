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



  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="{{ asset('signin.css') }}">


</head>
<body class="text-center">


<main class="form-signin w-100 m-auto">
  @if (session('login-error'))    
  <div class="alert alert-warning alert-dismissible" role="alert">
   <strong>{{ session('login-error') }}</strong> 
   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
 </div>
 @endif
  <form action="/login" method="POST">
  @csrf
  <img class="mb-4" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQpaqBJzhY1_nTTwxTuN803wI-DC4OXjXqPx3UFc0XlERNGQ8HwXImt1jpsE_Z7UT-GxfY" alt="" width="72" height="57">
  <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

  <div class="form-floating">
    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" >
    <label for="floatingInput">Email address</label>
  </div>
  <div class="form-floating">
    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" >
    <label for="floatingPassword">Password</label>
  </div>

  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div>
  <x-button type="submit" text="Sign in" class="w-100 btn-lg" /> 
  <a class="mt-2 w-100 btn btn-lg btn-primary" type="submit" href="/home">Kembali ke Home</a>
  <p class="mt-5 mb-3 text-muted">© 2017–2022</p>
</form>
</main>
</body>
</html>