@extends('layout.master')

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