@extends('layouts.header')

@section('content')

<section class="barber-profile mt-5 mb-5">
  <div class="container">
    <form action="/product-cart-total-post" method="POST">
      @csrf
      <div class="card">
          <div class="card-header">
              Payment Detail
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="customer_id" class="form-label">ID Customer</label>
                <select class="form-select" aria-label="Default select example" name="customer_id">
                  <option value="{{ $dataCustomer->customer_id }}" selected>{{ $dataCustomer->customer_id }}</option>
                </select>
              </div>
              <div class="col-md-6 mb-3">
                <label for="order_id" class="form-label">ID Order</label>
                <select class="form-select" aria-label="Default select example" name="order_id">
                  <option value="{{ $ordersnew->id }}" selected>{{ $ordersnew->id }}</option>
                </select>
              </div>
            </div>
  
              <label for="order_id" class="form-label mt-5 mb-5">Total Payment</label>
              <table class="table" id="products_table">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Total Each Product</th>
                    </tr>
                </thead>
                <tbody>
                  @php
                    $total = 0;
                  @endphp
                  @foreach ($orders as $order)
                  <tr>
                      @foreach ($order->products as $item)
                          <td>
                            {{ $item->nama_produk }}
                          </td>
                          <td>
                            {{ $item->pivot->quantity }}
                          </td>
                          <td>
                            Rp {{ number_format($item->harga, 2) }}
                          </td>
                          <td>
                           @php
                                $data = $item->pivot->quantity * $item->harga;
                                $total = $total + $data;
                           @endphp
                            Rp {{ number_format($data, 2) }}
                          </td>
                        </tr>
                      @endforeach
                  @endforeach
                </tbody>
            </table>
            <hr class="mb-4">
            <h4 class="mb-3">Manual Transfer</h4>
            <div class="d-block my-3">
              <div class="row mb-3">
                <div class="col-lg-6 mt-3 mb-3">
                  <div>
                    <img src="/assets/img/clients/mandiri (1).png" height="50" width="93" alt="">
                    <h6 class="my-1">PT DBarbershop (Admin Rama)</h6>
                    <h6 class="my-1 ">1330011586</h6>
                  </div>
                </div>
                <div class="col-lg-6 mt-3 mb-3">
                  <div>
                    <img src="/assets/img/clients/bca (1).png" height="50" width="93" alt="">
                    <h6 class="my-1">PT DBarbershop (Admin Rama)</h6>
                    <h6 class="my-1 ">1330011586</h6>
                  </div>
                </div>
                <div class="col-lg-6 mt-3 mb-3">
                  <div>
                    <img src="/assets/img/clients/bri (1).png" height="50" width="93" alt="">
                    <h6 class="my-2">PT DBarbershop (Admin Rama)</h6>
                    <h6 class="my-0">1330011586</h6>
                  </div>
                </div>
                <div class="col-lg-6 mt-3 mb-3">
                  <div>
                    <img src="/assets/img/clients/bni (1).png" height="50" width="93" alt="">
                    <h6 class="my-2">PT DBarbershop (Admin Rama)</h6>
                    <h6 class="my-0">1330011586</h6>
                  </div>
                </div>
              </div>
            </div>
            <label for="harga_total" class="form-label mt-5 mb-3">Total Harga</label>
                <input type="text" class="form-control" name="harga_total" id="final_harga" value="{{ $total }}">
            <label for="invoice" class="form-label mt-4">Upload Bukti Invoice Anda</label>
            <div class="input-group mb-3">
                <input type="file" name="invoice" class="form-control" required id="invoice">
                {{-- <label class="input-group-text" for="inputGroupFile02">Upload</label> --}}
            </div>  
          </div>
      </div>
      <div class="d-flex flex-row-reverse">
            <div class="">
              <button type="submit" class="btn btn-primary mt-3 ">Submit</button>
            </div>
      </div>
  </form>

</div>
</section>
@endsection