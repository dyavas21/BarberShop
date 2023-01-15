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
                <input disabled type="text" class="form-control" value="{{ $dataCustomer->customer_id }}" id="order_id_cust" required>
                <input hidden type="text" class="form-control" name="order_id_cust" value="{{ $dataCustomer->customer_id }}" id="order_id_cust" >
              </div>
              <div class="col-md-6 mb-3">
                <label for="email" class="form-label">Email</label>
                <input disabled type="text" class="form-control" value="{{ $dataUser->email }}" id="email" required>
                <input hidden type="text" class="form-control" name="email" value="{{ $dataUser->email }}" id="email" >
              </div>
              <div class="col-md-6 mb-3">
                <label for="fname" class="form-label">First Name</label>          
                <input disabled type="text" class="form-control" value="{{ ucfirst($dataCustomer->fname) }}" id="fname" required>
                <input hidden type="text" class="form-control" name="fname" value="{{ $dataCustomer->fname }}" id="fname" >
              </div>
              <div class="col-md-6 mb-3">
                <label for="lname" class="form-label">Last Name</label>
                <input disabled type="text" class="form-control" value="{{ ucfirst($dataCustomer->lname) }}" id="lname" required>
                <input hidden type="text" class="form-control" name="lname" value="{{ $dataCustomer->lname }}" id="lname" >
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
                              <select name="products[]" class="form-control" required>
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
      <div class="d-flex flex-row-reverse">
            <div class="">
              <button type="submit" class="btn btn-dark mt-3 ">Submit</button>
            </div>
      </div>
  </form>
</div>
</section>
@endsection