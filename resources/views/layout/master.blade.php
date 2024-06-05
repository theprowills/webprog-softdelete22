<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} | JRamedia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="../css/core.min.css"> -->

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.0/css/all.css">
    <!-- <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.0/css/all.css"> -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"> -->
    <link rel="stylesheet" href="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.14.1/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.14.1/css/mdb.min.css"> -->
    <!-- <link rel="stylesheet" href="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/docs-app/css/compiled-addons-4.14.1.min.css"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>


    <link href='https://fonts.googleapis.com/css?family=Cutive Mono' rel='stylesheet'>

    <style>
      html {
        font-size: 14px;
      }
      
      .nav-item, .navbar-brand{
        font-family: 'Cutive Mono';
      }

      .nav-item.dropdown .dropdown-item:active {
        background-color: #17a2b8 !important;
        color: white !important;
      }
      body{
        height: 100vh;
      }
    </style>

    @yield('head')
</head>
<body>

@if ($role == 'admin')
    <nav class="navbar navbar-expand-lg bg-light" style="font-size: 15px">
      <div class="container-fluid">
        <a class="navbar-brand text-info" href="{{ url('/') }}">JRamedia Admin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-info" aria-current="page" href="{{ url('/product') }}">View Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-info" href="{{ url('/transaction') }}">View All Transaction</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-info" href="{{ url('/viewAcc') }}">View Account</a>
            </li>
            <li class="nav-item">
              <form class="form-inline">
                <input class="col-10 form-control" type="search" placeholder="Search Our product Here..." aria-label="Search" >
                <button class="btn btn-info" type="submit">
                  <i class="fa-regular fa-magnifying-glass"></i>
                </button>
              </form>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-info" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Profile
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item text-info" href="#">Action</a>
                <a class="dropdown-item text-info" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-info" href="#">Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
@elseif($role == 'customer')
    <nav class="navbar navbar-expand-lg bg-light" style="font-size: 15px">
      <div class="container-fluid">
        <a class="navbar-brand text-info" href="{{ url('/') }}">JRamedia Customer</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-info" aria-current="page" href="{{ url('/product') }}">View Products</a>
            </li>
            <li class="nav-item">
              <form class="form-inline">
                <input class="col-10 form-control" type="search" placeholder="Search Our product Here..." aria-label="Search" >
                <button class="btn btn-info" type="submit">
                  <i class="fa-regular fa-magnifying-glass"></i>
                </button>
              </form>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-info" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Profile
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item text-info" href="#">Action</a>
                <a class="dropdown-item text-info" href="{{ url('/myCart') }}">View Cart</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-info" href="#">Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
@else
    <nav class="navbar navbar-expand-lg bg-light" style="font-size: 15px">
      <div class="container-fluid">
        <a class="navbar-brand text-info" href="{{ url('/') }}">JRamedia admin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-info" aria-current="page" href="{{ url('/login') }}">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-info" href="{{url('/register') }}">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-info" href="{{url('/aboutUs') }}">About Us</a>
            </li>
            {{--
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown link
                </a>
                <ul class="dropdown-menu text-info" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              
              --}}
          </ul>
        </div>
      </div>
    </nav>
@endif

    @yield('content')

    @if ($title != 'Login' or $title != 'Register')
    <footer class="text-center text-white fixed-bottom shadow" style="background-color: #F8F9FA;">
        <!-- Grid container -->
        <!-- <div class="container p-1"></div> -->
        <!-- Grid container -->
      
        <!-- Copyright -->
        <div class="text-center p-3 text-info" style="background-color: #eee;">
          © 2022 Copyright
          <a class="text-info" href="https://mdbootstrap.com/">JRamedia Book Store</a>
        </div>
        <!-- Copyright -->
      </footer>
    <script src="/docs/4.0/assets/js/vendor/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    @endif
</body>
</html>