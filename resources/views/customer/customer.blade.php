@extends('layouts.header-customer')


@section('content')
<main>
    <header class="page-header page-header-dark bg-dark pb-10">
        <div class="container">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="activity"></i></div>
                            Dashboard
                        </h1>
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
                                    @if (is_null($dataPemesanan))
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
               $dataSetuju = $dataPemesanan->where('status_id', '==', '2')->count();
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
                                    @elseif ($dataSetuju == null)
                                    0
                                    @else
                                    {{ $dataSetuju }}
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
            <div class="card-header">Pesanan Berlangsung</div>
            <div class="card-body">
                <div class="datatable">
                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name Barber</th>
                                <th>Alamat Barber</th>
                                <th>No Handphone</th>     
                                <th>Harga</th>   
                                <th>Tanggal Booking</th>
                                <th>Jam Booking</th>  
                                <th>Status</th>    
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name Customer</th>
                                <th>Alamat Barber</th>
                                <th>No Handphone</th>   
                                <th>Harga</th>  
                                <th>Tanggal Booking</th> 
                                <th>Jam Booking</th> 
                                <th>Status</th>      
                            </tr>
                        </tfoot>
                        <tbody>
                            @if ($dataPemesanan == null)
                            @else
                                @foreach ($dataPemesanan as $item)
                                    <tr>                            
                                        <td>{{ ucfirst($item->barbpem->fname) }} {{ ucfirst($item->barbpem->lname) }}</td>
                                        <td>{{ ucwords($item->barbdescpem->address) }}</td>
                                        <td>{{ $item->barbdescpem->phone }}</td>  
                                        <td>Rp {{ number_format($item->barbdescpem->harga, 2) }}</td>  
                                        <td>{{ date('d M Y', strtotime($item->date_order)); }}</td>          
                                        <td>{{ date('H:i', strtotime($item->time_order)); }}</td>                                    
                                        <td style="text-align:center">
                                            @if ($item->statuspem->id_status == 1)
                                                <a href="" class="btn btn-sm btn-warning">{{ $item->statuspem->nama_status }}</a>
                                            @elseif($item->statuspem->id_status == 2)
                                                <a href="" class="btn btn-sm btn-success">{{ $item->statuspem->nama_status }}</a>
                                            @elseif($item->statuspem->id_status == 3)
                                                <a href="" class="btn btn-sm btn-danger">{{ $item->statuspem->nama_status }}</a>
                                            @endif
                                        </td>                                                   
                                    </tr>    
                                @endforeach                  
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection