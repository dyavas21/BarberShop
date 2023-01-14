@extends('layouts.header-admin')

@section('content')
    <!-- Main page content-->
    <div class="container mt-n10">

        <!-- Example Colored Cards for Dashboard Demo-->
        <div class="row">
            <div class="col-xxl-3 col-lg-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="mr-3">
                                <div class="text-white-75 small">Total User</div>
                                <div class="text-lg font-weight-bold">{{ $dataUser->count() }}</div>
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
                                <div class="text-lg font-weight-bold">{{ $dataBarber->count() }}</div>
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
                                <div class="text-lg font-weight-bold">{{ $dataCustomer->count() }}</div>
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
                                <div class="text-white-75 small">Produk</div>
                                <div class="text-lg font-weight-bold">{{ $dataProduk->count() }}</div>
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
        </div> 

        <div class="card mb-4">
            <div class="card-header">Personnel Management</div>
            <div class="card-body">
                <div class="datatable">
                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                        
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Gender</th>
                                <th>Alamat</th>
                                <th>Umur</th>
                                <th>Tanggal Dibuat</th>
                                <th>Photo</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Gender</th>
                                <th>Alamat</th>
                                <th>Umur</th>
                                <th>Tanggal Dibuat</th>
                                <th>Photo</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>
                        @php
                            $no = 1;                               
                        @endphp
                            @foreach ($dataUser as $row)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $row->fname }}</td>
                                    <td>{{ $row->lname }}</td>                                  
                                    <td>{{ $row->email }}</td>
                                    <td>{{ $row->roleuser->nama_role }}</td>                                    
                                    @if ($row->role_id == 1)
                                        <td>{{ $row->descc->gender ?? '-' }}</td>
                                    @elseif ($row->role_id == 2)
                                    <td>{{ $row->descb->gender ?? '-' }}</td>
                                    @endif
                                    @if ($row->role_id == 1)
                                    <td>{{ $row->descc->address ?? '-' }}</td>
                                    @elseif ($row->role_id == 2)
                                    <td>{{ $row->descb->address ?? '-' }}</td>
                                    @endif
                                    @if ($row->role_id == 1)
                                        <td>{{ $row->descc->age ?? '-' }} Tahun</td>
                                    @elseif ($row->role_id == 2)
                                    <td>{{ $row->descb->age ?? '-' }} Tahun</td>
                                    @endif                    
                                    <td>{{ $row->created_at->format('d M Y') }}</td>
                                    @if ($row->role_id == 1)
                                    @if ($row->descc == null)
                                    <td>''</td>
                                    @else
                                         <td><img src="{{ asset('photo/'.$row->descc->photo) }}" height="100" width="100" class="rounded-circle d-block mx-auto barber-profile" alt="..."></td>
                                    @endif
                                    @elseif ($row->role_id == 2)
                                    <td><img src="{{ asset('gambarbarber/'.$row->descb->gambarbarber ) ?? '-' }}" height="100" width="100" class="rounded-circle d-block mx-auto barber-profile" alt="..."></td>
                                    @endif
                                    <td>
                                        <a class="btn btn-danger" href="/adminajadeh/detele/{{ $row->id_user }}">Delete</a>
                                    </td>
                                </tr>                        
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection