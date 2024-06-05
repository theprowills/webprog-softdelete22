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
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12">
              <div class="card text-black" style="border-radius: 25px;">
                <div class="card-body p-md-5">
                  <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5 pl-5">
      
                      <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Login</p>
      
                      <form class="mx-1 mx-md-4" method="post" action="{{ url('/login') }}">
                        @csrf
                        <div class="d-block mb-4">
                          <label for="email">Your Email</label>
                          <input type="text" class="form-control" id="email">
                        </div>

                        <div class="d-block mb-4">
                          <label for="password">Password</label>
                          <input type="password" class="form-control" id="password">
                        </div>
                        
                        <div class="d-flex justify-content-between mb-5">
                          <div>
                            <input class="form-check-input" type="checkbox" name="remember" id="">
                            <label for="remember">Remember me</label>
                          </div>
                          <label class="form-check-label" for="form2Example3">
                            New here? <a href="#!"><u>Sign Up Here!</u></a>
                          </label>
                        </div>
                        
                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                          <button type="button" class="btn btn-primary btn-lg">Login</button>
                        </div>
                      </form>
                    </div>
                    <div class="col-md-10 col-lg-6 col-xl-7 d-lg-flex d-none align-items-center ">
                      <img src="../assets/regist.png" class="img-fluid" alt="Image Failed to load">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection