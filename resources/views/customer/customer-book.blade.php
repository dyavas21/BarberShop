@extends('layouts.header-barber')

@section('content')

<section class="barber-profile mt-5 mb-5">


    <div class="container mt-5">
        <div class="card">
            <h5 class="card-header">Profile</h5>
            <div class="card-body">
                <div class="row row-cols-auto">
                    <div class="col-lg-2 d-flex flex-row">
                        <img src="assets/images/team1.jpeg" height="100" class="rounded-circle barber-profile" alt="...">
                    </div>
                    <div class="col-lg-4 d-flex flex-row">
                        <div class="mb-3">
                            <h4>Ramadhani Al Amin</h4>
                            <h6>Tukang Cukur Profesional</h6>    
                            <h6>Bogor, West Java, Indonesia</h6>    
                            <h6>100 Transaksi selesai</h6>                        
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex flex-row-reverse">
                        <div class="mb-3">
                            <h4>Rating 4.9</h4>                                                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row row-cols-auto">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                      Informasi Pelanggan
                    </div>
                    <div class="card-body">
                       <h6>Gede Dyava Savitra</h6>
                       <h6 class="mt-3">Jalan Cemara Boulevard no 44 Taman Yasmin Sektor 2 Bogor</h6>
                       <form>
                            <div class="row form-group">
                            <label for="date" class="col-sm-1 col-form-label">Date</label>
                                <div class="col-sm-4">
                                    <div class="input-group date" id="datepicker">
                                        <input type="text" class="form-control">
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-white d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <li class="list-group-item d-flex justify-content-between lh-condensed mt-3">
                            <div>
                              <img src="assets/img/clients/mandiri (1).png" height="50" width="93" alt="">
                              <h6 class="my-1">PT Bake n Cake (Admin Ian)</h6>
                              <h6 class="my-1 ">1330011586</h6>
                            </div>
                          </li>
                          <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                              <img src="assets/img/clients/bca (1).png" height="50" width="93" alt="">
                              <h6 class="my-1">PT Bake n Cake (Admin Ian)</h6>
                              <h6 class="my-1 ">1330011586</h6>
                            </div>
                          </li>
                          <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                              <img src="assets/img/clients/bri (1).png" height="50" width="93" alt="">
                              <h6 class="my-2">PT Bake n Cake (Admin Ian)</h6>
                              <h6 class="my-0">1330011586</h6>
                            </div>
                          </li>
                          <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                              <img src="assets/img/clients/bni (1).png" height="50" width="93" alt="">
                              <h6 class="my-2">PT Bake n Cake (Admin Ian)</h6>
                              <h6 class="my-0">1330011586</h6>
                            </div>
                          </li>
                          <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-2">Upload your invoice</h6>
                                <input type="file" class="form-control" aria-label="file example" required>
                                <div class="invalid-feedback">Example invalid form file feedback</div>
                            </div>
                          </li>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                      Detail Harga
                    </div>
                    <div class="card-body">
                      <blockquote class="blockquote mb-0">
                        <div class="row row-cols-auto">
                            <div class="col-lg-6">
                                <h6>Harga Jasa</h6>
                                <h6>Biaya Jasa Website</h6>
                                <h6>Total Harga</h6>
                            </div>
                            <div class="col-lg-6">
                                <h6 class="d-flex justify-content-end">Rp 100.000</h6>
                                <h6 class="d-flex justify-content-end">Rp 1.000</h6>
                                <h6 class="d-flex justify-content-end">Rp 101.000</h6>                        
                            </div>
                            <a class="btn btn-primary d-flex ms-auto mt-3" href="/barber-profile-detail">Bayar</a>
                        </div>
                      </blockquote>
                     
                    </div>
                       
                </div>
            </div>
        </div>
    </div>
</section>
@endsection