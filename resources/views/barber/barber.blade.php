@extends('layouts.header-barber')


@section('content')
<main>
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
        <div class="container">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="activity"></i></div>
                            Dashboard
                        </h1>
                        <div class="page-header-subtitle">Example dashboard overview and content summary</div>
                    </div>
                    <div class="col-12 col-xl-auto mt-4">
                        <button class="btn btn-white btn-sm line-height-normal p-3" id="reportrange">
                            <i class="mr-2 text-primary" data-feather="calendar"></i>
                            <span></span>
                            <i class="ml-1" data-feather="chevron-down"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <div class="container mt-n10">
        <!-- Example Colored Cards for Dashboard Demo-->
        <div class="row">
            <div class="col-xxl-3 col-lg-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="mr-3">
                                <div class="text-white-75 small">Total Transaksi</div>
                                <div class="text-lg font-weight-bold">
                                    @if ($dataPemesanan==null)
                                        0
                                    @else
                                    {{ $dataPemesanan->count() }}
                                    @endif
                                </div>
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
            @php
            $dataPending = $dataPemesanan->where('status_id', '==', '1')->count();
            @endphp
            <div class="col-xxl-3 col-lg-6">
                <div class="card bg-warning text-white mb-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="mr-3">
                                <div class="text-white-75 small">Transaksi Pending</div>
                                <div class="text-lg font-weight-bold">
                                    @if (is_null($dataPemesanan))
                                    0
                                    @elseif ($dataPending == null)
                                    0
                                    @else
                                    {{ $dataPending }}
                                    @endif 
                                </div>
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
            @php
            $dataDiterima = $dataPemesanan->where('status_id', '==', '2')->count();
            @endphp
            <div class="col-xxl-3 col-lg-6">
                <div class="card bg-success text-white mb-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="mr-3">
                                <div class="text-white-75 small">Transaksi Diterima</div>
                                <div class="text-lg font-weight-bold">
                                    @if (is_null($dataPemesanan))
                                    0
                                    @elseif ($dataDiterima == null)
                                    0
                                    @else
                                    {{ $dataDiterima }}
                                    @endif 
                                </div>
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
            @php
            $dataDitolak = $dataPemesanan->where('status_id', '==', '3')->count();
            @endphp
            <div class="col-xxl-3 col-lg-6">
                <div class="card bg-danger text-white mb-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="mr-3">
                                <div class="text-white-75 small">Transaksi Ditolak</div>
                                <div class="text-lg font-weight-bold">
                                    @if (is_null($dataPemesanan))
                                    0
                                    @elseif ($dataDitolak == null)
                                    0
                                    @else
                                    {{ $dataDitolak }}
                                    @endif 
                                </div>
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

        <!-- Example DataTable for Dashboard Demo-->
        <div class="card mb-4">
            <div class="card-header">Pesanan Masuk</div>
            <div class="card-body">
                <div class="datatable">
                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name Customer</th>
                                <th>Alamat Customer</th>
                                <th>No Handphone Customer</th>     
                                <th>Invoice</th>     
                                <th>Status</th>           
                                <th>Action</th>                  
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name Customer</th>
                                <th>Alamat Customer</th>
                                <th>No Handphone Customer</th>     
                                <th>Invoice</th>   
                                <th>Status</th>   
                                <th>Action</th>      
                            </tr>
                        </tfoot>
                        <tbody>
                {{-- 
                        $data = BarberDescription::where('barber_desc_id', '=', $id)->first();
                        $data2 = User::where('id_user', '=', $id)->first();
                        $data3 = Barber::where('barber_id', '=', $id)->first();
                        $data4 = Pemesanan::where('pemesanan_id_barber', '=', $id)->first(); --}}
                            @if ($dataPemesanan == null)
                    
                            @else
                                @foreach ($dataPemesanan as $item)
                                    <tr>                            
                                        <td>{{ $item->fname }} {{ $item->lname }}</td>
                                        <td>{{ $item->address }}</td>
                                        <td>{{ $item->phone }}</td>  
                                        {{-- <td>{{ $item->barbdescpem->harga  }}</td> --}}
                                        <td> <img width="100" height="100" src="{{ asset('invoice/'.$item->invoice ) }}"></td>   
                                        <td style="text-align:center">
                                            @if ($item->status_id == 1)
                                                <a href="" class="btn btn-sm btn-warning">{{ $item->statuspem->nama_status }}</a>
                                            @elseif($item->status_id == 2)
                                                <a href="" class="btn btn-sm btn-success">{{ $item->statuspem->nama_status }}</a>
                                            @elseif($item->status_id == 3)
                                                <a href="" class="btn btn-sm btn-danger">{{ $item->statuspem->nama_status }}</a>
                                            @endif
                                            {{-- <div class="btn btn-warning ">{{ $item->statuspem->nama_status }}</div> --}}
                                        </td>                            
                                        <td>
                                            <div class="btn-group">
                                            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                              Change Status
                                            </button>
                                            <ul class="dropdown-menu">
                                              {{-- <li><a class="dropdown-item" action href="{{ url('barber-change-status-proceed/'.$item->status_id) }}">Proceed</a></li> --}}
                                              <li><a class="dropdown-item" href="barber-change-status-proceed/{{ $item->id_pemesanan }}">Proceed</a></li>
                                              <li><a class="dropdown-item" href="barber-change-status-reject/{{ $item->id_pemesanan }}">Cancel</a></li>
                                              <li><a class="dropdown-item" href="barber-change-status-pending/{{ $item->id_pemesanan }}">Pending</a></li>
                                            </ul>                                            
                                          </div>
                                        </td>           
                                    </tr>    
                                @endforeach                  
                            @endif
                        {{-- @foreach ($data3 as $item3)
                            @foreach ($data4 as $item4)
                                @if ($item3->barber_id == $item4->pemesanan_id_barber)
                                <tr>
                                    <td>{{ $item3->pemesananBarber->fname }} {{ $item3->pemesananBarber->lname }}</td>
                                    <td>{{ $item3->pemesananBarber->address }}</td>
                                    <td>{{ $item3->pemesananBarber->phone }}</td>                              
                                </tr>  
                                @else

                                @endif
                            @endforeach
                        @endforeach      --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection