@extends('layouts.header')

@section('content')
<section class="team text-center mt-5">
    <div class="container">
        <h1>Our Teams</h1>
        <p>
        Sambutlah team dari D'Barbershop yang memungkin website ini terbuat.
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