@extends('layouts.header')

@section('content')

<section class="about-us text-center mt-5 mb-5">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col-lg-6 text-start">
                <h1>Sejarah Berdirinya</h1>
                <p>
                    D'Barbershop merupakan website yang memungkinkan customer untuk memesan layanan potong rambut secara online dan mudah. Customer dapat memilih tukang cukur sesuai dengan rating yang ada. Selain itu, D'Barbershop juga mempunyai fasilitas dimana tukang cukur dapat mendaftar di website kita dan meningkatkan brandingnya.
                </p>
                <a href="" class="hero-btn red-btn">EXPLORE NOW</a>
            </div>
            <div class="col-lg-6">
                <img src="assets/images/about-us.jpeg" />
            </div>
       </div>
    </div>
</section>

<section class="team text-center mt-5">
    <div class="container">
        <h1>Our Teams</h1>
        <p>
        Sambutlah team dari D'Barbershop yang memungkinkan website ini terbuat.
        </p>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100 border border-0">
                    <div class="card-body text-center facilities-body">
                        <img src="assets/images/team1.jpeg" class="mx-auto d-block" />
                        <h3>Ramadhani Al Amin</h3>
                        <p>2440103911</p>
                        <p style="font-style: italic">UI/UX Designer</p>
                    </div>
                  </div>
            </div>
            <div class="col">
                <div class="card h-100 border border-0">
                    <div class="card-body text-center facilities-body">
                        <img src="assets/images/team2.jpeg" class="mx-auto d-block" />
                        <h3>Muhammad Rizal Sakti</h3>
                        <p>2440099946</p>
                        <p style="font-style: italic">Full Stack</p>
                    </div>
                  </div>
            </div>
            <div class="col">
                <div class="card h-100 border border-0">
                    <div class="card-body text-center facilities-body">
                        <img src="assets/images/team3.jpeg" class="mx-auto d-block" />
                        <h3>Gede Dyava Savitra</h3>
                        <p>2440100683</p>
                        <p style="font-style: italic">Full Stack</p>
                    </div>
                  </div>
            </div>
       </div>
       <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
        <div class="col">
            <div class="card h-100 border border-0">
                <div class="card-body text-center facilities-body">
                    <img src="assets/images/team4.jpeg" class="mx-auto d-block"/>
                    <h3>Mahatmaditya Favian</h3>
                    <p>2440103546</p>
                    <p style="font-style: italic">Front-End</p>
                </div>
              </div>
        </div>
        <div class="col">
            <div class="card h-100 border border-0">
                <div class="card-body text-center facilities-body">
                    <img src="assets/images/team5.jpeg" class="mx-auto d-block"/>
                    <h3>Bachatsa Taqqiya</h3>
                    <p>2440071733</p>
                    <p style="font-style: italic">UI/UX Designer</p>
                </div>
              </div>
          </div>
        </div>
       </div>
    </div>
</section>
@endsection