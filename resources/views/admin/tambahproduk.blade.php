@extends('layouts.header-admin')

@section('content')
        <main>
        <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
            <div class="container">
                <div class="page-header-content pt-4">
                    <div class="row align-items-center justify-content-between">
                        {{-- <div class="col-auto mt-4">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i data-feather="activity"></i></div>
                                Dashboard
                            </h1>
                            <div class="page-header-subtitle">Example dashboard overview and content summary</div>
                        </div> --}}
                        {{-- <div class="col-12 col-xl-auto mt-4">
                            <button class="btn btn-white btn-sm line-height-normal p-3" id="reportrange">
                                <i class="mr-2 text-primary" data-feather="calendar"></i>
                                <span></span>
                                <i class="ml-1" data-feather="chevron-down"></i>
                            </button>
                        </div> --}}
                    </div>
                </div>
            </div>
        </header>
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
                    <form action="/admin-insertproduk" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="tipe_id">Tipe Produk</label>
                            <select class="form-control form-control-solid" name="tipe_id" id="tipe_id">                            
                                @foreach ($datatipe as $tipe)
                                <option value="{{ $tipe->id_tipe_produk }}">{{ $tipe->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group"><label for="namaproduk">Nama Produk</label><input class="form-control" id="namaproduk" name="nama_produk" type="text"></div>  
                        <div class="form-group"><label for="harga">Harga Produk</label><input class="form-control" id="harga" name="harga" type="number"></div>  
                        <div class="form-group"><label for="stok">Jumlah Stok Produk</label><input class="form-control" id="stok" name="stok" type="number"></div> 

                        <label for="gambar" class="form-label">Upload Gambar Produk</label>
                        <div class="input-group mb-3">
                            <input type="file" name="gambar" class="form-control" id="gambar">
                            <label class="input-group-text" for="gambar">Upload</label>
                        </div> 
                        <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection