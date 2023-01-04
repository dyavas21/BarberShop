@extends('layouts.header')

@section('content')

<section class="barber-profile mt-5 mb-5">
  <div class="container">
    <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Your cart</span>
                {{-- <span class="badge badge-secondary badge-pill">3</span> --}}
            </h4>
            <ul class="list-group mb-3 sticky-top">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                  <img src="{{ asset('gambarbarber/'.$dataBarber->descriptionBarber->gambarbarber)}}" height="40" width="40" class="rounded-circle d-block me-auto barber-profile" alt="...">
                    <div class="d-block me-auto">
                        <h6 class="my-0">Barber name</h6>
                        <small class="text-muted">{{ $dataBarber->fname }} {{ $dataBarber->lname }}</small>
                    </div>
                    <span class="text-muted">Rp {{ $dataBarber->descriptionBarber->harga }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span>Total (IDR)</span>
                    <strong>Rp {{ $dataBarber->descriptionBarber->harga }}</strong>
                </li>
            </ul>
        </div>
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Billing address</h4>
            <form action="/barber-bookinsert" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate="">
              @csrf
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="pemesanan_id_cust" class="form-label">ID Customer</label>
                    <select class="form-select" aria-label="Default select example" name="pemesanan_id_cust">
                      <option value="{{ $dataCustomer->customer_id }}" selected>{{ $dataCustomer->customer_id }}</option>
                    </select>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="pemesanan_id_barber" class="form-label">ID Barber</label>
                    <select class="form-select" name="pemesanan_id_barber" aria-label="Default select example">
                      <option value="{{ $dataBarber->barber_id }}" selected>{{ $dataBarber->barber_id }}</option>
                    </select>
                  </div>
                    <div class="col-md-6 mb-3">
                      <label for="fname" class="form-label">First Name</label>
                      <input type="text" class="form-control" name="fname" value="{{ $dataCustomer->fname }}" id="fname" required>
                        <div class="invalid-feedback"> Valid first name is required. </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="lname" class="form-label">Last Name</label>
                      <input type="text" class="form-control" name="lname" value="{{ $dataCustomer->lname }}" id="fname" required>
                        <div class="invalid-feedback"> Valid last name is required. </div>
                    </div>
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email address</label>
                  <select class="form-select" name="email" aria-label="Default select example">
                    <option value="{{ $dataUser->email }}" selected>{{ $dataUser->email }}</option>
                  </select>                      
                </div>
                <div class="mb-3">
                  <label for="alamat" class="form-label">Alamat</label>
                  <input type="text" name="address" class="form-control" id="alamat" value="{{ $dataCustomer->descriptionCustomer->address }}" required>                       
                    <div class="invalid-feedback"> Please enter your shipping address. </div>
                </div>
                <div class="mb-3">
                  <label for="phone" class="form-label">No Handphone</label>
                  <input type="tel" name="phone" class="form-control" value="{{ $dataCustomer->descriptionCustomer->phone }}" id="phone" required>
                </div>
                <hr class="mb-4">
                <h4 class="mb-3">Manual Transfer</h4>
                <div class="d-block my-3">
                  <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                      <div>
                        <img src="/assets/img/clients/mandiri (1).png" height="50" width="93" alt="">
                        <h6 class="my-1">PT DBarbershop (Admin Rama)</h6>
                        <h6 class="my-1 ">1330011586</h6>
                      </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                      <div>
                        <img src="/assets/img/clients/bca (1).png" height="50" width="93" alt="">
                        <h6 class="my-1">PT DBarbershop (Admin Rama)</h6>
                        <h6 class="my-1 ">1330011586</h6>
                      </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                      <div>
                        <img src="/assets/img/clients/bri (1).png" height="50" width="93" alt="">
                        <h6 class="my-2">PT DBarbershop (Admin Rama)</h6>
                        <h6 class="my-0">1330011586</h6>
                      </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                      <div>
                        <img src="/assets/img/clients/bni (1).png" height="50" width="93" alt="">
                        <h6 class="my-2">PT DBarbershop (Admin Rama)</h6>
                        <h6 class="my-0">1330011586</h6>
                      </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                      <div>
                          <h6 class="my-2">Upload your invoice</h6>
                          <input type="file" class="form-control" required aria-label="file example" name="invoice" required>
                          <div class="invalid-feedback">Example invalid form file feedback</div>
                      </div>
                    </li>
                  </ul>
                </div>
                <hr class="mb-4">
                <button type="submit" class="btn btn-primary btn-lg btn-block" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  Submit payment
                </button>
            </form>
        </div>
    </div>
</div>
</section>
@endsection