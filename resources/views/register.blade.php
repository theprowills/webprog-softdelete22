<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} | gJramedia</title>
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
    <style>
      html {
        font-size: 12px;
        
      }
    </style>
</head>
<body>
    @section('content')
    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
              <div class="card text-black" style="border-radius: 25px;">
                <div class="card-body p-md-5">
                  <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5">
      
                      <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Register</p>
      
                      <form class="mx-1 mx-md-4">
                        <div class="d-block mb-4">
                            <label for="nama">Your Name</label>
                            <input type="text" class="form-control" id="nama">
                        </div>
                        
                        <div class="d-block mb-4">
                          <label for="email">Your Email</label>
                          <input type="email" class="form-control" id="email">
                        </div>

                        <div class="d-block mb-4">
                          <label for="password">Password</label>
                          <input type="password" class="form-control" id="password">
                        </div>
                        
                        <div class="d-flex justify-content-center mb-5">
                          <label class="form-check-label" for="form2Example3">
                            Already have an account? <a href="#!">Log In Here!</a>
                          </label>
                        </div>
                        
                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                          <button type="button" class="btn btn-primary btn-lg">Register</button>
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


    @section('content')
    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
              <div class="card text-black" style="border-radius: 25px;">
                <div class="card-body p-md-5">
                  <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5">
      
                      <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Login</p>
      
                      <form class="mx-1 mx-md-4">
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
                            New here? <a href="#!">Sign Up Here!</a>
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
    

    @section('content')
    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
          <div class="row d-flex justify-content-around align-items-center h-100">
            <!-- <div class="col-lg-12 col-xl-11">
              <div class="card text-black" style="border-radius: 25px;">
                <div class="card-body p-md-5"> -->
                  <div class="row d-flex justify-content-around align-items-center">
                    <!-- <div class="d-flex align-items-center"> -->
                      <div class="col-md-10 col-lg-6 col-xl-5">
                        <p class="h1 m-2">JRamedia</p>
                        <p class="h5 m-2">We provide our customer with the best product quality</p>
                      </div>
                      <div class="col-md-10 col-lg-6 col-xl-5 d-lg-flex d-none align-items-center ">
                        <img src="../assets/aboutUs.png" class="img-fluid" alt="Image Failed to load" style="min-width: 110%;">
                      </div>

                    </div>
                  </div>
                <!-- </div>
              </div>
            </div> -->
          </div>
        </div>
      </section>
    @endsection

    
    @section('content')
    <section class="vh-100" style="background-color: #eee;">
      <div class="container py-5">
        <div class="row h-100 align-items-center py-5">
            <div class="col-lg-6">
                <h1 class="display-5">JRamedia</h1>
                <p class="lead text-muted mb-0">We provide our customer with the best product quality</p>
            </div>
            <div class="col-lg-6 d-none d-lg-block">
              <img src="../assets/aboutUs1.png" alt="" class="img-fluid">
            </div>
        </div>
      </div>
    </section>
    @endsection



    @section('content')
    <section class="vh-100" style="background-color: white;">
      <div class="container py-5">
        <div class="row h-100 align-items-center py-5">
          <div class="col-lg-5 px-5 mx-auto d-flex justify-content-center">
            <img src="https://res.cloudinary.com/mhmd/image/upload/v1556834136/img-2_vdgqgn.jpg" alt="" class="img-fluid mb-4 mb-lg-0" width="350px">
          </div>
          <div class="col-lg-6">
            <!-- <i class="fa fa-leaf fa-2x mb-3 text-primary" aria-hidden="true"></i> -->
            <h2 class="font-weight-light">Nothings matter except the satisfaction of our customer</h2>
            <p class="font-italic text-muted mb-4">Providing you with the best stationary you'll ever met</p>
          </div>
        </div>
      </div>
    </section>
    @endsection

    
    @section('content')
      <section class="vh-100" style="background-color: white;">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Product Added successfully</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <p class="text-center h1" style="color: #17A1B6;">Our Product</p>
        
        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
          <button type="button" class="btn btn-success btn-lg">Add Product</button>
        </div>
        <div class="row  row-cols-1 row-cols-md-3 mb-3 text-center">
          <div class="col d-flex justify-content-center">
            <div class="card h-100" style="width: 18rem;">
              <img class="card-img-top" src="../assets/houseOfHades.jpg" alt="Card image cap" width="10px">
              <div class="card-body">
                <h5 class="card-title">sarasa</h5>
                <h6 class="card-subtitle mb-2 text-muted">Rp. 22000</h6>
                <p class="card-text">sarasa pen 0.5</p>
                <a href="#" class="btn btn-primary">Update</a>
                <a href="#" class="btn btn-danger">Delete</a>
              </div>
            </div>
          </div>
          <div class="col  d-flex justify-content-center">
            <div class="card h-100" style="width: 18rem;">
              <img class="card-img-top" src="../assets/Comic-Kaguya.png" alt="Card image cap" >
              <div class="card-body">
                <h5 class="card-title">sarasa</h5>
                <h6 class="card-subtitle mb-2 text-muted">Rp. 22000</h6>
                <p class="card-text">sarasa pen 0.5</p>
                <a href="#" class="btn btn-primary">Update</a>
                <a href="#" class="btn btn-danger">Delete</a>
              </div>
            </div>
          </div>
          <div class="col  d-flex justify-content-center">
            <div class="card h-100" style="width: 18rem;">
              <img class="card-img-top" src="..\assets\sarasa.jpg" alt="Card image cap" >
              <div class="card-body">
                <h5 class="card-title">sarasa</h5>
                <h6 class="card-subtitle mb-2 text-muted">Rp. 22000</h6>
                <p class="card-text">sarasa pen 0.5</p>
                <a href="#" class="btn btn-primary">Update</a>
                <a href="#" class="btn btn-danger">Delete</a>
              </div>
            </div>
          </div>
        </div>
        <ul class="pagination justify-content-center" style="margin:20px 0">
          <li class="page-item"><a class="page-link" href="#">Previous</a></li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item active"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
            


        
      </section>
    @endsection


    
    @section('content')
    <section class="vh-100" style="background-color: white;">
        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
              <div class="card text-black shadow" style="border-radius: 5px; background-color: #F8F9FA;">
                <div class="card-body">
                  <div class="row justify-content-center">
                    <div class="col-12 p-1">
      
                      <p class="text-center h1" style="color: #17A1B6;">Add New Product</p>
      
                      <form class="mx-1">
                        <div class="d-block mb-3">
                            <label for="nama">Product Name</label>
                            <input type="text" class="form-control" id="p-name" placeholder="Enter Product Name...">
                        </div>
                        
                        <div class="d-block mb-3">
                          <label for="email">Product Price</label>
                          <input type="email" class="form-control" id="p-price" placeholder="Enter Product Price...">
                        </div>

                        <div class="d-block mb-3">
                          <label for="password">Product Description</label>
                          <input type="password" class="form-control" id="p-desc" placeholder="Enter Product Description...">
                        </div>
                        
                        <div class="input-group mb-3">
                          <span class="input-group-text" id="basic-addon3">Product Type</span>
                          <select class="form-select" id="p-type">
                            <option selected>Choose...</option>
                            <option value="1">Book</option>
                            <option value="2">Stationary</option>
                          </select>
                        </div>

                        <div class="input-group mb-3">
                          <input type="text" class="form-control" id="p-type" placeholder="Upload Product Image">
                          <span class="input-group-text" id="basic-addon3">Browse</span>
                        </div>

                        <div class="alert alert-danger" role="alert">
                          The name field is required.
                        </div>

                        <div class="d-flex justify-content-center">
                          <button type="button" class="btn btn-success btn-lg btn-block col-12">Update Product</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    @endsection


    @section('content')
    <section class="vh-100" style="background-color: white;">
        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
              <div class="card text-black shadow" style="border-radius: 25px; background-color: #eee;">
                <div class="card-body py-5">
                  <div class="row justify-content-center">
                    <div class="col-12">
      
                      <p class="text-center h1 fw-bold" style="color: #17A1B6;">Update Product Form</p>
      
                      <form class="mx-1 mx-md-4">
                        <div class="d-block mb-3">
                            <label for="nama">Product Name</label>
                            <input type="text" class="form-control" id="p-name" placeholder="Enter Product Name...">
                        </div>
                        
                        <div class="d-block mb-3">
                          <label for="email">Product Price</label>
                          <input type="email" class="form-control" id="p-price" placeholder="Enter Product Price...">
                        </div>

                        <div class="d-block mb-3">
                          <label for="password">Product Description</label>
                          <input type="password" class="form-control" id="p-desc" placeholder="Enter Product Description...">
                        </div>
                        
                        <div class="input-group mb-3">
                          <span class="input-group-text" id="basic-addon3">Product Type</span>
                          <select class="form-select" id="p-type">
                            <option selected>Choose...</option>
                            <option value="1">Book</option>
                            <option value="2">Stationary</option>
                          </select>
                        </div>

                        <div class="input-group mb-3">
                          <input type="text" class="form-control" id="p-type" placeholder="Upload Product Image">
                          <span class="input-group-text" id="basic-addon3">Browse</span>
                        </div>

                        <div class="alert alert-danger" role="alert">
                          The name field is required.
                        </div>

                        <div class="d-flex justify-content-center">
                          <button type="button" class="btn btn-success btn-lg btn-block col-12">Update Product</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    @endsection

    <button type="button" class="btn btn-outline-primary">Primary</button>
    <button type="button" class="btn btn-outline-secondary">Secondary</button>
    <button type="button" class="btn btn-outline-success">Success</button>
    <button type="button" class="btn btn-outline-danger">Danger</button>
    <button type="button" class="btn btn-outline-warning">Warning</button>
    <button type="button" class="btn btn-outline-info">Info</button>
    <button type="button" class="btn btn-outline-light">Light</button>
    <button type="button" class="btn btn-outline-dark">Dark</button>
    <br>
    <main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
      <div class="bd-example">
        <button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button>
  
      </div>

    </main>
    <button type="button" class="btn btn-secondary btn-lg btn-block">Block level button</button>
    <button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button>
    <button type="button" class="btn btn-secondary btn-lg btn-block">Block level button</button>

    <div class="offset-md-4 col-md-4 logindiv">
      <form id="loginForm">
       <h3 class="text-center">Login Form</h3>
       <div class="form-group">
        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
       </div>
       <div class="form-group">
        <input type="password" class="form-control" name="password" id="password" placeholder="Your Password" required>
       </div>
       <div class="form-group">
        <button class="btn btn-success col-12">Log In</button>
       </div>
      </form>
     </div>

    @section('content')
    <section class="vh-100" style="background-color: white;">
        <div class="container h-100 col-8">
          <div class="row d-flex justify-content-center h-100">
            <div class="col-lg-12 col-xl-11">
              <p class="text-center h2" style="color: #17A1B6;">Transaction History</p>
              <div style="overflow-x:auto;">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Transaction ID</th>
                      <th scope="col">Transaction Date</th>
                      <th scope="col">Username</th>
                      <th scope="col">Product Name</th>
                      <th scope="col">Price</th>
                      <th scope="col">Quantity</th>
                      <th scope="col">Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">12345123451234512345123451234512345</th>
                      <td>2020-12-01</td>
                      <td>jane</td>
                      <td>sarasa</td>
                      <td>22000</td>
                      <td>9</td>
                      <td>198000</td>
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
            </div>
          </div>
        </div>
      </section>
    @endsection

    @section('content')
    <section class="vh-100" style="background-color: white;">
      <div class="container h-100 col-8">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div>
            <p class="text-center h2" style="color: #17A1B6;">Accounts</p>

          </div>
          <div class="col-lg-12 col-xl-11">
            <div class="col d-block justify-content-center mb-3">
              <div class="card shadow h-100 d-flex flex-row">
                <div class="card-body ">
                  <h2 class="card-title">johny</h2>
                  <h3 class="card-subtitle mb-2 text-muted">johny@gmail.com</h3>
                  <h3 class="card-text text-warning">admin</h3>
                </div>
                <div class="d-grid">
                  <button class="btn btn-lg btn-primary" type="button">Update</button>
                  <button class="btn btn-lg btn-danger" type="button">Delete</button>
                </div>
              </div>
            </div>
            <div class="col d-block justify-content-center mb-3">
              <div class="card shadow h-100 d-flex flex-row">
                <div class="card-body">
                  <h2 class="card-title">jane</h3>
                  <h3 class="card-subtitle mb-2 text-muted">jane@gmail.com</h3>
                  <h3 class="card-text text-warning">customer</h3>
                </div>
                <div class="d-grid">
                  <button class="btn btn-lg btn-primary" type="button">Update</button>
                  <button class="btn btn-lg btn-danger" type="button">Delete</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    @endsection

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

    @section('content')

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">JRamedia</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About Us</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown link
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
              <div class="card text-black" style="border-radius: 25px;">
                <div class="card-body p-md-5">
                  <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5">
      
                      <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Register</p>
      
                      <form class="mx-1 mx-md-4">
                        <div class="d-block mb-4">
                            <label for="nama">Your Name</label>
                            <input type="text" class="form-control" id="nama">
                        </div>
                        
                        <div class="d-block mb-4">
                          <label for="email">Your Email</label>
                          <input type="email" class="form-control" id="email">
                        </div>

                        <div class="d-block mb-4">
                          <label for="password">Password</label>
                          <input type="password" class="form-control" id="password">
                        </div>
                        
                        <div class="d-flex justify-content-center mb-5">
                          <label class="form-check-label" for="form2Example3">
                            Already have an account? <a href="#!">Log In Here!</a>
                          </label>
                        </div>
                        
                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                          <button type="button" class="btn btn-primary btn-lg">Register</button>
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
        <footer class="text-center text-white fixed-bottom shadow" style="background-color: #F8F9FA;">
          <!-- Grid container -->
          <!-- <div class="container p-1"></div> -->
          <!-- Grid container -->
        
          <!-- Copyright -->
          <div class="text-center p-3" style="background-color: #eee; color: #17A1B6;">
            © 2022 Copyright
            <a style="color: #17A1B6;" href="https://mdbootstrap.com/">JRamedia Book Store</a>
          </div>
          <!-- Copyright -->
        </footer>
    @endsection
</body>
</html>