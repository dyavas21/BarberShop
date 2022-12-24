@extends('layouts.header-barber')

@section('content')

<section class="barber-profile mt-5 mb-5">
    <div class="container mt-5">
        <div class="row row-cols-auto">
            <div class="col-lg-3">
                <div class="card">
                    <h5 class="card-header">Profile Picture</h5>
                    <div class="card-body">
                    <img src="assets/images/team1.jpeg" height="100" class="rounded-circle d-block mx-auto barber-profile" alt="...">
                    <form action="/barber-profile-foto-update" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="d-flex justify-content-center mt-3">
                            <div class="row row-cols-auto justify-content-center">
                             <input type="file" name="gambar" class="form-control" id="gambar">
                             <a href="#" class="btn btn-primary mt-3 " type="submit">Upload new image</a>
                            </div>
                         </div>
                    </form>
                    
               
                    </div>
                  </div>
            </div>
            <div class="col-lg-9">
                <div class="card">
                    <h5 class="card-header">Account Details</h5>
                    <div class="card-body">
                        <form action="/barber-profile-detail-update" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row row-cols-auto">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email address</label>
                                        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" value="{{ $data->email }}" disabled>                       
                                    </div>
                                    <div class="mb-3">
                                        <label for="fname" class="form-label">First Name</label>
                                        <input type="text" class="form-control" name="fname" value="{{ $data->fname }}" id="fname">
                                    </div> 
                                    <div class="mb-3">
                                        <label for="age" class="form-label">Umur</label>
                                        <input type="number" name="age" class="form-control" value="{{ $data->age }}" id="age">
                                    </div>  
                                     
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">No Handphone</label>
                                        <input type="tel" name="phone" class="form-control" value="{{ $data->phone }}" id="phone">
                                    </div>                     
                                    <div class="mb-5">
                                        <label for="lname" class="form-label">Last Name</label>
                                        <input type="text" name="lname" class="form-control" value="{{ $data->lname }}" id="lname">
                                    </div>   
                                    <div class="mb-3">
                                        <select class="form-select" name="gender" aria-label="Default select example">
                                            <option selected>{{ $data->gender }}</option>
                                            <option value="1">Male</option>
                                            <option value="2">Female</option>               
                                        </select>   
                                    </div>          
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" name="address" class="form-control" id="alamat" value="{{ $data->address }}">                       
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <input type="text" name="description" class="form-control" id="alamat" value="{{ $data->description }}">                       
                            </div>
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