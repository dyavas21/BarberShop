@extends('layouts.header-barber')

@section('content')

<section class="barber-profile mt-5 mb-5">
    <div class="container mt-5">
        <div class="row row-cols-auto">
            <div class="col-lg">
                <div class="card">
                    <h5 class="card-header">Account Details</h5>
                    <div class="card-body">
                        <form action="/barber-profile-inti-edit" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                            </div>
                            <div class="row row-cols-auto">
                                <div class="col-lg-6 mb-3">
                                    <div class="mb-3">
                                        <label for="fname" class="form-label">First Name</label>
                                        <input type="text" name="fname" class="form-control" id="fname" value="{{ $dataBarber->fname }}">
                                    </div>                                 
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <div class="mb-3">
                                        <label for="lname" class="form-label">Last Name</label>
                                        <input type="text" name="lname" class="form-control" value="{{ $dataBarber->lname }}"  id="lname">
                                    </div>                                  
                                </div>
                            </div>
                            <div class="row row-cols-auto">
                                <div class="col-lg-6">   
                                                    
                                    <div class="mb-3">
                                        <label for="age" class="form-label">Umur</label>
                                        <input type="number" name="age" class="form-control" value="{{ $dataBarberDesc->age }}"  id="age">
                                    </div>  
                                    <div class="mb-3">
                                        <label for="harga" class="form-label">Harga</label>
                                        <input type="number" name="harga" class="form-control" value="{{ $dataBarberDesc->harga }}"  id="harga">
                                    </div>  
                                     
                                </div>
                                <div class="col-lg-6">                        
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">No Handphone</label>
                                        <input type="tel" name="phone" class="form-control" value="{{ $dataBarberDesc->phone }}" id="phone">
                                    </div>                      
                                    <div class="form-group">
                                        <label for="gender">Gender</label>
                                        <select class="form-control form-control" name="gender" id="gender">                            
                                            <option selected>{{ $dataBarberDesc->gender }}</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option> 
                                        </select>
                                    </div> 
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" value="{{ $dataBarberDesc->address }}" name="address" class="form-control" id="alamat" >                       
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <input type="text" name="description" value="{{ $dataBarberDesc->description }}" class="form-control" id="alamat">                       
                            </div>
                            <img src="{{ asset('barber1/'.$dataBarberDesc->gambarbarber ) }}" height="100" width="100" class="rounded-circle d-block mx-auto barber-profile" alt="...">
                            <label for="gambarbarber" class="form-label">Upload Foto Anda</label>
                            <div class="input-group mb-3">
                                <input type="file" name="gambarbarber" class="form-control" id="gambarbarber">
                                <label class="input-group-text" for="inputGroupFile02">Upload</label>
                            </div>  
                            <img src="{{ asset('barber2/'.$dataBarberDesc->certificate ) }}" height="100" width="100" class="rounded-circle d-block mx-auto barber-profile" alt="...">
                            <label for="sertif" class="form-label">Upload Sertifikat Anda</label>
                            <div class="input-group mb-3">
                                <input type="file" name="certificate" class="form-control" id="inputGroupFile02">
                                <label class="input-group-text" for="inputGroupFile02">Upload</label>
                            </div>  
                            <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Save changes</button>
                            <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        Are you sure want to save changes?
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary" type="submit">Save changes</button>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                        </form>
                    </div>
                  </div>
            </div>
        </div>
    </div>

</section>

@endsection