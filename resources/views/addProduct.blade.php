@extends('layout.master')

@section('head')
@endsection
    

@if ($role == 'admin')
    @section('navbar')
    <nav class="navbar navbar-expand-lg bg-light" style="font-size: 15px">
      <div class="container-fluid">
        <a class="navbar-brand text-info" href="#">JRamedia Admin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-info" aria-current="page" href="#">View Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-info" href="#">View All Transaction</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-info" href="#">View Account</a>
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
    @endsection
@elseif($role == 'customer')
    @section('navbar')
    <nav class="navbar navbar-expand-lg bg-light" style="font-size: 15px">
      <div class="container-fluid">
        <a class="navbar-brand text-info" href="#">JRamedia Customer</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-info" aria-current="page" href="#">View Products</a>
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
                <a class="dropdown-item text-info" href="#">View Cart</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-info" href="#">Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    @endsection
@else
    @section('navbar')
    <nav class="navbar navbar-expand-lg bg-light" style="font-size: 15px">
      <div class="container-fluid">
        <a class="navbar-brand text-info" href="#">JRamedia admin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-info" aria-current="page" href="#">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-info" href="#">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-info" href="#">About Us</a>
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
    @endsection
@endif


@section('content')
<!-- Auth::user()->role == 'admin' -->
    @if($role == 'admin')
        @include('viewAcc')
    @elseif($role == 'customer')
        @include('homeCust')
    @else
        @include('homeGuest')
    @endif
@endsection
