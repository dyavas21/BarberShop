@extends('layouts.header-admin')

@section('content')
        <!-- Main page content-->
        <div class="container mt-n10">

            <!-- Example Colored Cards for Dashboard Demo-->
            {{-- <div class="row">
                <div class="col-xxl-3 col-lg-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-3">
                                    <div class="text-white-75 small">Total User</div>
                                    <div class="text-lg font-weight-bold"></div>
                                </div>
                                <i class="feather-xl text-white-50" data-feather="calendar"></i>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Report</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-6">
                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-3">
                                    <div class="text-white-75 small">Barber</div>
                                    <div class="text-lg font-weight-bold"></div>
                                </div>
                                <i class="feather-xl text-white-50" data-feather="dollar-sign"></i>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Report</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-3">
                                    <div class="text-white-75 small">Customer</div>
                                    <div class="text-lg font-weight-bold"></div>
                                </div>
                                <i class="feather-xl text-white-50" data-feather="check-square"></i>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Tasks</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-6">
                    <div class="card bg-danger text-white mb-4">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-3">
                                    <div class="text-white-75 small">Pending Requests</div>
                                    <div class="text-lg font-weight-bold">17</div>
                                </div>
                                <i class="feather-xl text-white-50" data-feather="message-circle"></i>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Requests</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>  --}}
    
            <!-- Example DataTable for Dashboard Demo-->
            <div class="card mb-4">
                <div class="card-header">Tipe Produk</div>
                <div class="card-body">
                    <form action="/adminajadeh-insertproduk" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="tipe_id">Tipe Produk</label>
                            <select class="form-control form-control-solid" name="tipe_id" id="tipe_id">                            
                                @foreach ($datatipe as $tipe)
                                <option value="{{ $tipe->id_tipe_produk }}">{{ $tipe->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group"><label for="namaproduk">Nama Produk</label><input class="form-control" id="namaproduk" name="nama_produk" required type="text"></div>  
                        <div class="form-group"><label for="harga">Harga Produk</label><input class="form-control" id="harga" name="harga" required type="number"></div>  
                        <div class="form-group"><label for="stok">Jumlah Stok Produk</label><input class="form-control" id="stok" name="stok" required type="number"></div> 

                        <label for="gambar" class="form-label">Upload Gambar Produk</label>
                        <div class="input-group mb-3">
                            <input type="file" name="gambar" class="form-control" required id="gambar">
                            <label class="input-group-text" for="gambar">Upload</label>
                        </div> 
                        <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Submit</button>
                    </form>
                </div>
            </div>
        </div>
@endsection