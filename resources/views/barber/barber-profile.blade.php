@extends('layouts.header-barber')

@section('content')

<section class="about-us text-center mt-5 mb-5">
  <div class="container">
      <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Customer</th>
              <th scope="col">Lokasi</th>
              <th scope="col">Tanggal Book</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark Otto</td>
              <td>Malang</td>
              <td>21-12-2023</td>
              <td>
                  <button type="button" class="btn btn-primary">Terima</button>
                  <button type="button" class="btn btn-danger">Tolak</button>
              </td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob Cowel</td>
              <td>Pandaan</td>
              <td>21-12-2023</td>
              <td>
                  <button type="button" class="btn btn-primary">Terima</button>
                  <button type="button" class="btn btn-danger">Tolak</button>
              </td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Jonas Tow</td>
              <td>Pandaan</td>
              <td>21-12-2023</td>
              <td>
                  <button type="button" class="btn btn-primary">Terima</button>
                  <button type="button" class="btn btn-danger">Tolak</button>
              </td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Jonas Tow</td>
              <td>Pandaan</td>
              <td>21-12-2023</td>
              <td>
                  <button type="button" class="btn btn-primary">Terima</button>
                  <button type="button" class="btn btn-danger">Tolak</button>
              </td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Jonas Tow</td>
              <td>Pandaan</td>
              <td>21-12-2023</td>
              <td>
                  <button type="button" class="btn btn-primary">Terima</button>
                  <button type="button" class="btn btn-danger">Tolak</button>
              </td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Jonas Tow</td>
              <td>Pandaan</td>
              <td>21-12-2023</td>
              <td>
                  <button type="button" class="btn btn-primary">Terima</button>
                  <button type="button" class="btn btn-danger">Tolak</button>
              </td>
            </tr>
          </tbody>
        </table>
  </div>
</section>

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
                                <a href="/barber-profile" class="btn btn-primary">Edit Profile</a>                                                                     
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
                <div class="row row-cols-auto">
                    <div class="col-lg-4">
                        <img src="assets/images/cv.jpeg" height="100" class="rounded-circle barber-profile" alt="...">
                    </div>
                    <div class="col-lg-4">
                        <img src="assets/images/cv.jpeg" height="100" class="rounded-circle barber-profile" alt="...">
                    </div>
                    <div class="col-lg-4">
                        <img src="assets/images/cv.jpeg" height="100" class="rounded-circle barber-profile" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="card">
            <h5 class="card-header">Deskripsi</h5>
            <div class="card-body">
                <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore corporis sint dicta cumque sed quaerat vitae facere. Architecto ratione laborum quaerat culpa provident reprehenderit, odit iste esse placeat inventore neque, alias soluta fugit labore cumque minima, molestiae exercitationem ipsam optio? Ipsum praesentium aliquam possimus, eius iusto sunt cumque saepe id accusantium architecto nam voluptates dolore consequatur quo hic corrupti? In aperiam eligendi neque dolor. Dolorem totam, nihil vel quidem reprehenderit consequuntur voluptas modi fuga debitis id dolorum iure cupiditate nesciunt eum sed error sit unde iusto doloremque possimus. Modi earum corrupti nam harum quod voluptas quibusdam eveniet mollitia officia eius.</h6>
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
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>
@endsection