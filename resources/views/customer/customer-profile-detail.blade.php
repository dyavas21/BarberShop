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
                    <div class="d-flex justify-content-center mt-3">
                        <a href="#" class="btn btn-primary">Upload new image</a>
                    </div>
                    </div>
                  </div>
            </div>
            <div class="col-lg-9">
                <div class="card">
                    <h5 class="card-header">Account Details</h5>
                    <div class="card-body">
                        <form>
                            <div class="row row-cols-auto">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email address</label>
                                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" disabled>                       
                                    </div>
                                    <div class="mb-3">
                                        <label for="fname" class="form-label">First Name</label>
                                        <input type="text" class="form-control" id="fname">
                                    </div> 
                                    <div class="mb-3">
                                        <label for="age" class="form-label">Umur</label>
                                        <input type="number" class="form-control" id="age">
                                    </div>  
                                     
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">No Handphone</label>
                                        <input type="tel" class="form-control" id="phone">
                                    </div>                     
                                    <div class="mb-5">
                                        <label for="lname" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" id="lname">
                                    </div>   
                                    <div class="mb-3">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Gender</option>
                                            <option value="1">Male</option>
                                            <option value="2">Female</option>               
                                        </select>   
                                    </div>          
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="alamat">                       
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
                                        <button type="button" class="btn btn-primary">Save changes</button>
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