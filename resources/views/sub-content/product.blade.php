@extends('layouts.header')

@section('content')

<section class="team text-center mt-5 mb-5">
    <div class="container mt-5">
        <h1>Produk</h1>
        <p>
       Berikut informasi mengenai produk yang ada.
        </p>

    </div>

    <div class="container mt-5">
      <div class="row">
        @foreach ($product as $item)
        <div class="col-md-12 order-md-2 mb-4">
          <ul class="list-group mb-3 sticky-top">
              <li class="list-group-item d-flex justify-content-between lh-condensed">
                <img src="{{ asset('gambarproduk/'.$item->gambar)}}" height="80" width="80" class="rounded-circle d-block me-auto barber-profile" alt="...">
                  <div class="d-block me-auto mt-3">
                    <h6 class="my-0 mb-3">{{ $item->tipeproduk->nama }}</h6>
                      <h6 class="my-0 mb-3">{{ $item->nama_produk }}</h6>
                      <small class="text-muted">{{ $item->stok }}</small>
                  </div>
                  <span class="text-muted mt-3">Rp {{ number_format($item->harga, 2) }}</span>
              </li>
          </ul>
        </div> 
        @endforeach
      </div>
      <div class="d-flex flex-row-reverse">
        <a href="/product-cart" class="btn btn-dark">Beli Produk</a>
      </div>
    </div>

    <div class="container mt-5">
        <h5>Testimoni</h5>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="cards-wrapper">
                    <div class="card rating">
                        <div class="card-header">
                          Gede Dyava
                        </div>
                        <div class="card-body">
                          <blockquote class="blockquote mb-0">
                            <p>Gede Dyava</p>
                            
                          </blockquote>
                        </div>
                      </div>
                      <div class="card rating">
                        <div class="card-header">
                          Ikow Sakti
                        </div>
                        <div class="card-body">
                          <blockquote class="blockquote mb-0">
                            <p>A well-known quote, contained in a blockquote element.</p>
                            
                          </blockquote>
                        </div>
                      </div>
                      <div class="card rating">
                        <div class="card-header">
                          Ramadhani Al Amin
                        </div>
                        <div class="card-body">
                          <blockquote class="blockquote mb-0">
                            <p>A well-known quote, contained in a blockquote element.</p>
                           
                          </blockquote>
                        </div>
                      </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="cards-wrapper">
                    <div class="card rating">
                        <div class="card-header">
                          Mahatmaditya FRS
                        </div>
                        <div class="card-body">
                          <blockquote class="blockquote mb-0">
                            <p>A well-known quote, contained in a blockquote element.</p>
                            
                          </blockquote>
                        </div>
                      </div>
                      <div class="card rating">
                        <div class="card-header">
                          Bachatsa Taqqiya
                        </div>
                        <div class="card-body">
                          <blockquote class="blockquote mb-0">
                            <p>A well-known quote, contained in a blockquote element.</p>
                            
                          </blockquote>
                        </div>
                      </div>
                      <div class="card rating">
                        <div class="card-header">
                          Joshua Sulerman
                        </div>
                        <div class="card-body">
                          <blockquote class="blockquote mb-0">
                            <p>A well-known quote, contained in a blockquote element.</p>
                           
                          </blockquote>
                        </div>
                      </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="cards-wrapper">
                    <div class="card rating">
                        <div class="card-header">
                          Raka Da Maria
                        </div>
                        <div class="card-body">
                          <blockquote class="blockquote mb-0">
                            <p>A well-known quote, contained in a blockquote element.</p>
                            
                          </blockquote>
                        </div>
                      </div>
                      <div class="card rating">
                        <div class="card-header">
                          Ian Ismaya
                        </div>
                        <div class="card-body">
                          <blockquote class="blockquote mb-0">
                            <p>A well-known quote, contained in a blockquote element.</p>
                            
                          </blockquote>
                        </div>
                      </div>
                      <div class="card rating">
                        <div class="card-header">
                          Wahyu Hidayat
                        </div>
                        <div class="card-body">
                          <blockquote class="blockquote mb-0">
                            <p>A well-known quote, contained in a blockquote element.</p>
                            
                          </blockquote>
                        </div>
                      </div>
                </div>
              </div>
            </div>
            {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button> --}}
        </div>
    </div>
</section>
@endsection