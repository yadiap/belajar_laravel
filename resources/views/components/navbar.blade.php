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
                        <a class="nav-link  {{$title === 'Home' ? 'active' : ''}}" aria-current="page" href="/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{$title === 'About' ? 'active' : ''}}" aria-current="page" href="/about">About</a>
                    </li>
                </ul>
                <ul class="navbar-nav  mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="btn nav-link {{$title === 'Register' ? 'active' : ''}}" aria-current="page" href="/register">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn nav-link {{$title === 'Login' ? 'active' : ''}}" aria-current="page" href="/login">Login</a>
                    </li>
                </ul>
            </div>
        </div>
      </nav>