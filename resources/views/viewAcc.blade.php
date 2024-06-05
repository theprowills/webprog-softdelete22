@extends('layout.master')

@section('content')
    <section class="vh-100" style="background-color: white;">
      <div class="container h-100 col-8">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div>
            <p class="text-center h2" style="color: #17A1B6;">Accounts</p>
          </div>
          <div class="col-lg-12 col-xl-11">

            @foreach ($users as $user)
              <div class="col d-block justify-content-center mb-3">
                <div class="card shadow h-100 d-flex flex-row">
                  <div class="card-body ">
                    <h2 class="card-title">{{$user->username}}</h2>
                    <h3 class="card-subtitle mb-2 text-muted">{{$user->email}}</h3>
                    <h3 class="card-text text-warning">{{$user->role}}</h3>
                  </div>
                  <div class="d-grid">
                    <button class="btn btn-lg btn-primary" type="button">Update</button>
                    <button class="btn btn-lg btn-danger" type="button">Delete</button>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </section>
    @endsection