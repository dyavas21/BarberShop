@extends('layouts.header-customer')

@section('content')

<section class="barber-profile mt-5 mb-5">
    <div class="container mt-5">
        <div class="row row-cols-auto">
            <div class="col-lg">
                <div class="card">
                    <h5 class="card-header">Account Details</h5>
                    <div class="card-body">
                        <form action="/customer-profile-inti-edit" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                            </div>
                            <div class="row row-cols-auto">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="fname" class="form-label">First Name</label>
                                        <input type="text" name="fname" class="form-control" id="fname" value="{{ $dataCustomer->fname }}">
                                    </div>                                 
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="lname" class="form-label">Last Name</label>
                                        <input type="text" name="lname" class="form-control" value="{{ $dataCustomer->lname }}"  id="lname">
                                    </div>                                  
                                </div>
                            </div>
                            <div class="row row-cols-auto">
                                <div class="col-lg-6">                                                       
                                    <div class="mb-3">
                                        <label for="age" class="form-label">Umur</label>
                                        <input type="number" name="age" class="form-control" value="{{ $dataCustomerDesc->age }}"  id="age">
                                    </div>                                       
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="alamat" class="form-label">Alamat</label>
                                        <input type="text" value="{{ $dataCustomerDesc->address }}" name="address" class="form-control" id="alamat" >                       
                                    </div>
                                </div>
                                <div class="col-lg-6">                        
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">No Handphone</label>
                                        <input type="tel" name="phone" class="form-control" value="{{ $dataCustomerDesc->phone }}" id="phone">
                                    </div>                      
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-3">
                                        <label for="gender">Gender</label>
                                        <select class="form-control form-control" name="gender" id="gender">                            
                                            <option selected>{{ $dataCustomerDesc->gender }}</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option> 
                                        </select>
                                    </div> 
                                </div>
                            </div>
                            <img src="{{ asset('photo/'.$dataCustomerDesc->photo ) }}" height="100" width="100" class="rounded-circle d-block mx-auto barber-profile" alt="...">
                            <label for="photo" class="form-label">Upload Foto Anda</label>
                            <div class="input-group mb-3">
                                <input type="file" name="gambarbarber" class="form-control" id="gambarbarber" value="{{ $dataCustomerDesc->photo  }}">
                                <label class="input-group-text" for="inputGroupFile02">Upload</label>
                            </div>  
                            <button type="submit" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">Save changes</button>
                        </form>
                    </div>
                  </div>
            </div>
        </div>
    </div>

</section>

@endsection