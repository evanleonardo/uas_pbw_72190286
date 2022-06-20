<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=""> 
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Login</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">\
    <link href="https://getbootstrap.com/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/5.2/examples/sign-in/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <main class="form-signin w-100 m-auto">
    <form action="/user/cekLogin" method="POST">
    @csrf
        <img class="mb-4" src="https://sendimas.ukdw.ac.id/public/site/images/bene/33.ukdw.png" alt="" width="80" height="95">
        <h1 class="h3 mb-3 fw-normal">Form Login</h1><br>

        <div class="form-floating">
            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
            <div class="alert-danger">{{$errors->first('email')}}</div>
        </div>
        <div class="form-floating">
            <input type="password" name="password"  class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
            <div class="alert-danger">{{$errors->first('password')}}</div>
        </div>
    <br>
        <button class="w-100 btn btn-lg btn-success" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted">&copy; Evan Leonardo - SI UKDW 2019</p>
    </form>
    @if (session('alertLogout'))
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <strong>{{ session('alertLogout') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    </main>
  </body>
</html>