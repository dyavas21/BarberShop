@extends('layouts.header')

@section('content')

<section class="barber-profile mt-5 mb-5">
  <div class="container">
    <form action="/product-cart-post" method="POST">
      @csrf
      <div class="card">
          <div class="card-header">
              Order Detail
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="order_id_cust" class="form-label">ID Customer</label>
                <select class="form-select" aria-label="Default select example" name="order_id_cust">
                  <option value="{{ $dataCustomer->customer_id }}" selected>{{ $dataCustomer->customer_id }}</option>
                </select>
              </div>
              <div class="col-md-6 mb-3">
                <label for="fname" class="form-label">Last Name</label>
                <input type="text" class="form-control" name="lname" value="{{ $dataCustomer->lname }}" id="lname" required>
                  <div class="invalid-feedback"> Valid first name is required. </div>
              </div>
                <div class="col-md-6 mb-3">
                  <label for="fname" class="form-label">First Name</label>
                  <input type="text" class="form-control" name="fname" value="{{ $dataCustomer->fname }}" id="fname" required>
                    <div class="invalid-feedback"> Valid first name is required. </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="lname" class="form-label">Email</label>
                  <input type="text" class="form-control" name="email" value="{{ $dataUser->email }}" id="email" required>
                    <div class="invalid-feedback"> Valid last name is required. </div>
                </div>
            </div>
              <table class="table" id="products_table">
                  <thead>
                      <tr>
                          <th>Product</th>
                          <th>Quantity</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr id="product0">
                          <td>
                              <select name="products[]" class="form-control">
                                  <option value="">-- choose product --</option>
                                  @foreach ($products as $product)
                                      <option value="{{ $product->id }}">
                                          {{ $product->nama_produk }} (Rp{{ number_format($product->harga, 2) }})
                                      </option>
                                  @endforeach
                              </select>
                          </td>
                          <td>
                              <input type="number" name="quantities[]" class="form-control" value="1"/>
                          </td>
                      </tr>
                      <tr id="product1"></tr>
                  </tbody>
              </table>
              <div class="row">
                  <div class="col-md-12">
                      <button id="add_row" class="btn btn-default pull-left">+ Add Row</button>
                      <button id='delete_row' class="pull-right btn btn-danger">- Delete Row</button>
                  </div>
              </div>
          </div>
      </div>
      <div>
            <button type="submit" class="btn btn-primary">Submit</button>
      </div>
  </form>
</div>
</section>
@endsection