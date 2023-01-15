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
                    <div class="d-flex me-auto">
                      <img src="{{ asset('gambarbarber/'.$dataBarber->descriptionBarber->gambarbarber)}}" height="40" width="40" class="rounded-circle d-block me-auto barber-profile" alt="...">
                        <div class="d-block ms-3">
                          <h6 class="my-0">Barber name</h6>
                        <small class="text-muted">{{ ucfirst($dataBarber->fname) }} {{ ucfirst($dataBarber->lname) }}</small>
                        </div>
                    </div>
                    <span class="text-muted">Rp {{ number_format($dataBarber->descriptionBarber->harga, 2) }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span>Total (IDR)</span>
                    <strong>Rp {{ number_format($dataBarber->descriptionBarber->harga, 2) }}</strong>
                </li>
            </ul>
        </div>
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Billing address</h4>
            <form action="/barber-bookinsert" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="pemesanan_id_cust" class="form-label">ID Customer</label>
                    <input disabled type="text" class="form-control" value="{{ $dataCustomer->customer_id }}" id="fname" required>
                    <input hidden type="text" name="pemesanan_id_cust" class="form-control" value="{{ $dataCustomer->customer_id }}" id="fname">
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="pemesanan_id_barber" class="form-label">ID Barber</label>
                    <input disabled type="text" class="form-control" value="{{ $dataBarber->barber_id }}" id="fname" required>
                    <input hidden type="text" name="pemesanan_id_barber" class="form-control" value="{{ $dataBarber->barber_id }}" id="fname">
                  </div>
                    <div class="col-md-6 mb-3">
                      <label for="fname" class="form-label">First Name</label>
                      <input disabled type="text" class="form-control" value="{{ ucfirst($dataCustomer->fname) }}" id="fname" required>
                      <input hidden type="text" class="form-control" name="fname" value="{{ $dataCustomer->fname }}" id="fname" >
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="lname" class="form-label">Last Name</label>
                      <input disabled type="text" class="form-control" value="{{ ucfirst($dataCustomer->lname) }}" id="fname" required>
                      <input hidden type="text" class="form-control" name="lname" value="{{ $dataCustomer->lname }}" id="fname" >
                    </div>
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email address</label>               
                  <input disabled type="text" class="form-control" value="{{ $dataUser->email }}" id="email" required>
                  <input hidden type="text" class="form-control" name="email" value="{{ $dataUser->email }}" id="email" >      
                </div>
                <div class="mb-3">
                  <label for="alamat" class="form-label">Alamat</label>
                  <input type="text" disabled class="form-control" id="alamat" value="{{ ucwords($dataCustomer->descriptionCustomer->address) }}" required>    
                  <input type="text" hidden name="address" class="form-control" id="alamat" value="{{ $dataCustomer->descriptionCustomer->address }}" >                                          
                </div>
                <div class="mb-3">
                  <label for="phone" class="form-label">No Handphone</label>
                  <input type="tel" disabled class="form-control" value="{{ $dataCustomer->descriptionCustomer->phone }}" id="phone" required>
                  <input type="tel" hidden name="phone" class="form-control" value="{{ $dataCustomer->descriptionCustomer->phone }}" id="phone">
                </div>
                <div class="row">
                  <div class="col mb-3">
                    <label for="datePickerId">Tanggal Pemesanan</label>
                    <input id="datePickerId" class="form-control" name="date_order" type="date" required/>
                  </div>
                  <div class="col mb-3" id="time-picker">
                    <label for="time-input">Pilih Waktu</label>
                  <input type="time" id="time-input" name="time_order" required>
                  </div>
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
                          <input type="file" class="form-control" required aria-label="file example" name="invoice">
                      </div>
                    </li>
                  </ul>
                </div>
                <hr class="mb-4">
                <button type="submit" class="btn btn-dark btn-lg btn-block">
                  Submit payment
                </button>
            </form>
        </div>
    </div>
</div>
</section>
@endsection