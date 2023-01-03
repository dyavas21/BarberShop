@extends('layouts.header-customer')


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
                                <div class="text-white-75 small">Transaksi Berlangsung</div>
                                <div class="text-lg font-weight-bold">
                                    @if (is_null($orders))
                                        0
                                    @else
                                        {{ $orders->count() }}
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
            $dataPending = $orders->where('status_id', '==', '1')->count();
            @endphp
            <div class="col-xxl-3 col-lg-6">
                <div class="card bg-warning text-white mb-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="mr-3">
                                <div class="text-white-75 small">Transaksi Pending</div>
                                <div class="text-lg font-weight-bold">
                                    @if (is_null($orders))
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
               $dataSetuju = $orders->where('status_id', '==', '2')->count();
            @endphp
            <div class="col-xxl-3 col-lg-6">
                <div class="card bg-success text-white mb-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="mr-3">
                                <div class="text-white-75 small">Transaksi Diterima</div>
                                <div class="text-lg font-weight-bold">
                                    @if (is_null($orders))
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
            $dataDitolak = $orders->where('status_id', '==', '3')->count();
            @endphp
            <div class="col-xxl-3 col-lg-6">
                <div class="card bg-danger text-white mb-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="mr-3">
                                <div class="text-white-75 small">Transaksi Ditolak</div>
                                <div class="text-lg font-weight-bold">
                                    @if (is_null($orders))
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
                                <th>No</th>
                                <th>Name Produk</th>
                                <th>Jumlah Produk</th>
                                <th>Harga Produk</th>   
                                <th>Harga Total</th>   
                                <th>Invoice</th>      
                                <th>Status</th>    
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Name Produk</th>
                                <th>Jumlah Produk</th>
                                <th>Harga Produk</th>   
                                <th>Harga Total</th>   
                                <th>Invoice</th>      
                                <th>Status</th> 
                            </tr>
                        </tfoot>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @if ($orders == null)
                            @else
                                @foreach ($orders as $order)
                                <tr>     
                                    <td>{{ $no++ }}</td>                       
                                    <td>
                                        <ul>                                           
                                            @foreach ($order->products as $item)
                                                <li style="list-style-type: none">{{ $item->nama_produk }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td>
                                        <ul>                                           
                                            @foreach ($order->products as $item)
                                                <li style="list-style-type: none">{{ $item->pivot->quantity }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td>
                                        <ul>                                           
                                            @foreach ($order->products as $item)
                                                <li style="list-style-type: none">Rp {{ number_format($item->harga, 2) }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td>Rp {{ number_format($order->detailinvoice->harga_total, 2) }}</td>
                                    <td> <img src="{{ asset('invoice/'.$order->detailinvoice->invoice ) }}" alt="" style="width: 40px"></td>
                                    <td style="text-align:center">
                                        @if ($order->status_id == 1)
                                            <a href="" class="btn btn-sm btn-warning">Pending</a>
                                        @elseif($order->status_id == 2)
                                            <a href="" class="btn btn-sm btn-success">Accepted</a>
                                        @elseif($order->status_id == 3)
                                            <a href="" class="btn btn-sm btn-danger">Rejected</a>
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

