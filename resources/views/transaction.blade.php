@extends('layout.master')

@section('content')
    <section class="vh-100" style="background-color: white; font-size: 12px">
        <div class="container h-100 col-8">
          <div class="row d-flex justify-content-center h-100">
            <div class="col-lg-12 col-xl-11">
              <p class="text-center h3" style="color: #17A1B6;">Transaction History</p>
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