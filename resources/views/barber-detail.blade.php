@extends('layouts.header')

@section('content')

<section class="team text-center mt-5 mb-5">
    <div class="container mt-5">
        <h1>Profile Barber {{ucfirst( $dataBarber->fname) }}</h1>
        <p>
       Berikut informasi mengenai barber yang anda pilih.
        </p>
        <div class="card">
            <h5 class="card-header">Profile</h5>
            <div class="card-body">
                {{-- <div class=" d-flex justify-content-between lh-condensed">
                    <img src="{{ asset('gambarbarber/'.$dataBarber->descriptionBarber->gambarbarber)}}" height="80" width="80" class="rounded-circle d-block me-auto barber-profile" alt="...">
                      <div class="d-block me-auto">
                          <h6>{{ ucfirst($dataBarber->fname) }} {{ ucfirst($dataBarber->lname) }}</h6>
                            <h6 class="text-muted">{{ ucfirst($dataBarber->descriptionBarber->gender) }}</small>    
                            <h6 class="text-muted">{{ $dataBarber->descriptionBarber->phone }}</small>    
                            <h6 class="text-muted">{{ ucwords($dataBarber->descriptionBarber->address) }}</small>                             
                      </div>
                      <div class="d-block ml-auto">
                        <h6>RP {{ number_format($dataBarber->descriptionBarber->harga, 2) }}</h6>
                        <a href="/barber-book/{{ $dataBarber->barber_id }}" class="btn btn-dark">Book</a> 
                    </div>
                </div> --}}
                <div class="row row-cols-auto">
                  <div class="col-lg-4 d-flex flex-row">
                    <img src="{{ asset('gambarbarber/'.$dataBarber->descriptionBarber->gambarbarber)}}" height="120" width="120" class="rounded-circle d-block me-auto barber-profile" alt="...">
                  </div>
                  <div class="col-lg-4 d-flex flex-row">
                      <div class="mb-3">
                        <h6>{{ ucfirst($dataBarber->fname) }} {{ ucfirst($dataBarber->lname) }}</h6>
                        <h6 class="text-muted">{{ ucfirst($dataBarber->descriptionBarber->gender) }}</small>    
                        <h6 class="text-muted">{{ $dataBarber->descriptionBarber->phone }}</small>    
                        <h6 class="text-muted">{{ ucwords($dataBarber->descriptionBarber->address) }}</small>                        
                      </div>
                  </div>
                  <div class="col-lg-4 d-flex flex-row-reverse">
                    <div class="mb-3">
                        <h6>RP {{ number_format($dataBarber->descriptionBarber->harga, 2) }}</h6>
                        <a href="/barber-book/{{ $dataBarber->barber_id }}" class="btn btn-dark">Book</a>              
                    </div>
                </div>
              </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="card">
            <h5 class="card-header">Sertifikat</h5>
            <div class="card-body">
                <div class="row row-cols-auto d-flex">
                    <div class="col-lg-12">
                        <img src="{{ asset('certificate/'.$dataBarber->descriptionBarber->certificate) }}" height="200" class="mx-auto" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="card">
            <h5 class="card-header">Deskripsi</h5>
            <div class="card-body">
                <h6>{{ ucfirst($dataBarber->descriptionBarber->description) }}</h6>
            </div>
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