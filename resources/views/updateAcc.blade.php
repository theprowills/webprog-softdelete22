@section('content')
    <section class="vh-100" style="background-color: white;">
        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-9">
              <div class="card text-black shadow" style="border-radius: 5px; background-color: #F8F9FA;">
                <div class="card-body">
                  <div class="row justify-content-center">
                    <div class="col-12 p-1">
      
                      <p class="text-center h1" style="color: #17A1B6;">Update Account Form</p>
      
                      <form class="mx-1">
                        <div class="d-block mb-3">
                            <label for="name">Username</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter Product Name...">
                        </div>
                        
                        <div class="d-block mb-3">
                          <label for="email">Email</label>
                          <input type="email" class="form-control" id="email" placeholder="Enter Product Price...">
                        </div>

                        <div class="d-block mb-3">
                          <label for="password">Password</label>
                          <input type="password" class="form-control" id="password" placeholder="Enter Product Description...">
                        </div>
                        
                        <div class="input-group mb-3">
                          <span class="input-group-text" id="basic-addon3">User Role</span>
                          <select class="form-select" id="role">
                            <option selected>Choose...</option>
                            <option value="1">Customer</option>
                            <option value="2">Admin</option>
                          </select>
                        </div>

                        <!-- <div class="input-group mb-3">
                          <input type="text" class="form-control" id="p-type" placeholder="Upload Product Image">
                          <span class="input-group-text" id="basic-addon3">Browse</span>
                        </div> -->

                        <div class="alert alert-danger" role="alert">
                          The name field is required.
                        </div>

                        <div class="d-flex justify-content-center">
                          <button type="button" class="btn btn-success btn-lg btn-block col-12">Update Account</button>
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