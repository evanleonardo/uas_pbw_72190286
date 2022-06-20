<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">

    <title>72190286 - @yield('title')</title>
  </head>

  <div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <nav class="navbar navbar-dark bg-dark rounded-bottom">
                <a class="navbar-brand text-white" href="#">
                    <i class="bi bi-house-fill"></i> Hello, {{Auth::user()->nama_user ?? ''}}</a>
                <div class="dropdown float-right">
                    <button class="btn btn-info bg-light dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                        <i class="bi bi-person-square"></i> User  
                    </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item bg-light" href="#">{{Auth::user()->nama_user ?? ''}}</a>
                        <a class="dropdown-item bg-light" href="/user">Data Pengguna</a>
                        <a class="dropdown-item bg-light" href="/logout">Logout</a>
                </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="row">
    <div class="col-lg-2 col-md-3 col-sm-4 col-12" style="height: 82vh">
        <div class="row">
            @include('layout/sidebar')        
        </div>
    </div>
    <div class="col-lg-10 col-md-9 col-sm-8 col-12 mt-2" style="height: 93vh">
            @yield('content')
        </div>
    </div>
    <nav class="navbar p-3 bg-dark">
        <div class="row">
        <div class="col-lg-12">
            <span class="badge badge-pill badge-white text-light text-center"><iclass="bi bi-at"></i>SI UKDW 19 - 72190286</span>
        </div>
        </div>
    </nav>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>