@section('content')

    @if ($role == 'admin')
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Product Added successfully</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    <section class="vh-100 d-flex align-items-center" style="background-color: white;">
      <div class="container py-5 col-7">
        <div class="row h-100 align-items-center justify-content-center px-5">

            <p class="text-center h1" style="color: #17A1B6;">Our Products</p>
            
            @if ($role == 'admin')
            <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                <button type="button" class="btn btn-success btn-lg">Add Product</button>
            </div>
            @endif
            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                <div class="col d-flex justify-content-center px-1">
                    <div class="card h-100" style="width: 18rem;">
                        <img class="card-img-top" src="../assets/houseOfHades.jpg" alt="Card image cap" width="10px">
                        <div class="card-body">
                            <h5 class="card-title">sarasa</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Rp. 22000</h6>
                            <p class="card-text">{{ $deskripsi }}</p>
                            @if($role == 'admin')
                                <a href="#" class="btn btn-primary">Update</a>
                                <a href="#" class="btn btn-danger">Delete</a>
                            @elseif($role == 'customer')
                                <a href="#" class="btn btn-info">Add To Cart</a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col d-flex justify-content-center px-1">
                    <div class="card h-100" style="width: 18rem;">
                        <img class="card-img-top" src="../assets/Comic-Kaguya.png" alt="Card image cap" >
                        <div class="card-body">
                            <h5 class="card-title">sarasa</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Rp. 22000</h6>
                            <p class="card-text">sarasa pen 0.5</p>
                            @if($role == 'admin')
                                <a href="#" class="btn btn-primary">Update</a>
                                <a href="#" class="btn btn-danger">Delete</a>
                            @elseif($role == 'customer')
                                <a href="#" class="btn btn-info">Add To Cart</a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col d-flex justify-content-center px-1">
                    <div class="card h-100" style="width: 18rem;">
                        <img class="card-img-top" src="..\assets\sarasa.jpg" alt="Card image cap" >
                        <div class="card-body">
                            <h5 class="card-title">sarasa</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Rp. 22000</h6>
                            <p class="card-text">sarasa pen 0.5</p>
                            @if($role == 'admin')
                                <a href="#" class="btn btn-primary">Update</a>
                                <a href="#" class="btn btn-danger">Delete</a>
                            @elseif($role == 'customer')
                                <a href="#" class="btn btn-info">Add To Cart</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <ul class="pagination justify-content-center" style="margin:20px 0">
                <li class="page-item"><a class="page-link" href="#"><i class="fa-solid fa-chevron-left"></i></a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#"><i class="fa-solid fa-chevron-right"></i></a></li>
            </ul>
        </div>
      </div>
    </section>
    @endsection