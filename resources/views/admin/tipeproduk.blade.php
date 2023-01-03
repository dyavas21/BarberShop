@extends('layouts.header-admin')

@section('content')
        <main>
        <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
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

            <a href="/admin-tambahtipe" class="btn btn-success mt-5 mb-5">Tambah Tipe Produk</a>

            <!-- Example DataTable for Dashboard Demo-->
            <div class="card mb-4">
                <div class="card-header">Tipe Produk</div>
                <div class="card-body">
                    <div class="datatable">
                        <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tipe Produk</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Tipe Produk</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @php
                                $no = 1;
                            @endphp
                            @foreach ($data as $row)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $row->nama }}</td>                               
                                <td>
                                    <a class="btn btn-danger" href="/admin/detele-tipe/{{ $row->id_tipe_produk }}">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection