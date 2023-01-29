@extends('layouts.header-customer')

@section('content')

<section class="barber-profile mt-5 mb-5">
    <div class="container mt-5">
        <div class="row row-cols-auto">
            <div class="col-lg">
                <div class="card">
                    <h5 class="card-header">Lengkapi Profile</h5>
                    <div class="card-body">
                        <form action="/customer-profile-inti-insert" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{-- <div class="form-group">
                                <label for="customer_desc_id">User ke</label>
                                <select class="form-control form-control-solid" name="customer_desc_id" id="customer_desc_id">                            
                                    <option value="{{ $data->customer_id }}">{{ $data->customer_id }}</option>
                                </select>
                            </div> --}}
                            <div class="row row-cols-auto">
                                <div class="col-lg-6 mb-3">
                                    <label for="fname">First Name</label>
                                    <input type="text" disabled value="{{ ucfirst($dataCustomer->fname) }}" required class="form-control"  id="fname" required>
                                    <input type="text" hidden value="{{ $dataCustomer->fname }}" name="fname" required class="form-control"  id="fname" >
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label for="lname">Last Name</label>
                                    <input type="text" disabled value="{{ ucfirst($dataCustomer->lname) }}" required class="form-control"  id="lname" required>
                                    <input type="text" hidden value="{{ $dataCustomer->lname }}" name="lname" required class="form-control"  id="lname" >
                                </div>
                            </div>
                            <div class="row row-cols-auto">
                                <div class="col-lg-6">                                                       
                                    <div class="mb-3">
                                        <label for="age" class="form-label">Umur</label>
                                        <input type="number" name="age" required class="form-control"  id="age" required>
                                    </div>                                     
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="gender">Gender</label>
                                        <select class="form-control form-control" required name="gender" id="gender" required>                            
                                            <option>Pilih</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option> 
                                        </select>
                                    </div>  
                                </div> 
                                <div class="col-lg-6">                        
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">No Handphone</label>
                                        <input type="tel" name="phone" required class="form-control" id="phone" required>
                                    </div>                      
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="alamat" class="form-label">Alamat</label>
                                        <input type="text" name="address" required class="form-control" id="alamat" required>                       
                                    </div>
                                </div>
                            </div>
                            <label for="photo" class="form-label">Upload Foto Anda</label>
                            <div class="input-group mb-3">
                                <input type="file" name="photo" required class="form-control" id="photo" required>
                                <label class="input-group-text" for="photo">Upload</label>
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