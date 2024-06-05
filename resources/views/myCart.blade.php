@extends("layout.master")

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
@if ($cart == 0)
@section('content')
    <section class="vh-100" style="background-color: white;">
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Thank you for shopping at Jramedia</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="container h-100 col-8">
          <div class="row d-flex justify-content-center h-100">
            <div class="col-lg-12 col-xl-11 d-flex justify-content-center align-items-center flex-column">
              <p class="text-center h1" style="color: #17A1B6;">Your Cart is Empty</p>
              <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                <button type="button" class="btn btn-success btn-lg">Buy Product</button>
              </div>
            </div>
          </div>
        </div>
      </section>
    @endsection
@else
@section('content')
    <section class="vh-100" style="background-color: white;">
        <div class="container h-100 col-8">
          <div class="row d-flex justify-content-center h-100">
            <div class="col-lg-12 col-xl-11">
              <p class="text-center h2" style="color: #17A1B6;">My Cart</p>
              
              <div style="overflow-x:auto;">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col"></th>
                      <th scope="col">Product name</th>
                      <th scope="col">Price</th>
                      <th scope="col">Description</th>
                      <th scope="col">Quantity</th>
                      <th scope="col">Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">
                        <input type="image" src="../assets/R.png" name="saveForm" class="btTxt submit" id="saveForm" width="11px"/>
                      </th>
                      <td>energel</td>
                      <td>jane</td>
                      <td>sarasa</td>
                      <td>
                        <input type="text" name="" id="" placeholder="Quantity" size="6">
                        <button class="btn btn-success">
                          <i class="far fa-circle-check"></i>
                          <!-- <i class="far fa-circle-check" style="font-size:36px"></i>
                          <i class="far fa-circle-check" style="line-height: 1;"></i> -->
                        </button>
                      </td>
                      <td>9</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Larry</td>
                      <td>the Bird</td>
                      <td>@twitter</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="alert alert-danger" role="alert">
                Invalid Product Quantity
              </div>
              <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                <button type="button" class="btn btn-success btn-lg">Checkout</button>
              </div>
            </div>
          </div>
        </div>
      </section>
    @endsection
@endif
@endsection
