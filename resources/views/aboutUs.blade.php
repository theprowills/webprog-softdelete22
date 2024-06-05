@extends('layout.master')

@section('head')
@endsection
    
@section('navbar')
    <nav class="navbar navbar-expand-lg bg-light" style="font-size: 15px">
      <div class="container-fluid">
        <a class="navbar-brand" style="color: #17A1B6" href="#">JRamedia</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" style="color: #17A1B6" aria-current="page" href="#">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color: #17A1B6" href="#">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color: #17A1B6" href="#">About Us</a>
            </li>
            {{--
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown link
                </a>
                <ul class="dropdown-menu" style="color: #17A1B6" aria-labelledby="navbarDropdownMenuLink">
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
@endsection

@section('content')
    <section class="vh-100" style="background-color: #eee;">
      <div class="container h-100">
        <div class="row d-flex justify-content-around align-items-center h-100">
          <div class="row d-flex justify-content-around align-items-center">
            <!-- <div class="d-flex align-items-center"> -->
              <div class="col-md-10 col-lg-6 col-xl-5">
                <p class="h1 m-2">JRamedia</p>
                <p class="h5 m-2">We provide our customer with the best product quality</p>
              </div>
              <div class="col-md-10 col-lg-6 col-xl-5 d-lg-flex d-none align-items-center ">
                <img src="/assets/aboutUs.png" class="img-fluid" alt="Image Failed to load" style="min-width: 110%;">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection

