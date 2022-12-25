@extends('layouts.header-barber')

@section('content')

<section class="barber-profile mt-5 mb-5">
    <div class="container mt-5">
        <div class="row row-cols-auto">
            <div class="col-lg-9">
                <div class="card">
                    <h5 class="card-header">Account Details</h5>
                    <div class="card-body">
                        <form action="/barber-profile-inti-insert" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row row-cols-auto">
                                <div class="col-lg-6">                    
                                    <div class="mb-3">
                                        <label for="age" class="form-label">Umur</label>
                                        <input type="number" name="age" class="form-control" value="{{  $datainti->age }}"  id="age">
                                    </div>  
                                    <div class="mb-3">
                                        <label for="harga" class="form-label">Harga</label>
                                        <input type="number" name="harga" class="form-control" value="{{  $datainti->harga }}"  id="harga">
                                    </div>  
                                     
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">No Handphone</label>
                                        <input type="tel" name="phone" class="form-control" value="{{  $datainti->phone }}" id="phone">
                                    </div>                      
                                    <div class="mb-3">
                                        <select class="form-select" name="gender" aria-label="Default select example">
                                            <option selected>value="{{  $datainti->gender }}"</option>
                                            <option value="1">Male</option>
                                            <option value="2">Female</option>               
                                        </select>   
                                    </div>          
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" name="address" class="form-control" value="{{  $datainti->address }}" id="alamat" >                       
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <input type="text" name="description" class="form-control" value="{{  $datainti->description }}" id="alamat">                       
                            </div>
                            <label for="sertif" class="form-label">Upload Gambar Anda</label>
                            <img src="{{ asset('barber1/'.$datainti->gambarbarber ) }}" height="100" class="rounded-circle d-block mx-auto barber-profile" alt="...">
                            
                            <label for="sertif" class="form-label">Upload sertif Anda</label>
                            <img src="{{ asset('barber2/'.$datainti->certificate ) }}" height="100" class="rounded-circle d-block mx-auto barber-profile" alt="...">
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