@extends('layouts.header')

@section('content')

<section class="location mt-5">
    <div class="container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.5713377025263!2d112.67893081509524!3d-7.939756894280928!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd62996bbca58e5%3A0x4234c14fe926b04d!2sBINUS%20University%20Malang!5e0!3m2!1sen!2sid!4v1672847126300!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>

<section class="contact text-center mt-5 mb-5">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col-lg-6 text-start">
                <div class="row mb-5">
                    <div class="col-md-1 d-flex text-center align-items-center">
                        <i class="fas fa-home"></i>
                    </div>
                    <div class="col-md-11">
                            <h4>
                            D'Barbershop
                            </h4>
                            <h5>Malang, East Java, Indonesia</h5>
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-md-1 d-flex text-center align-items-center">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="col-md-11">
                            <h4>
                                0811-3637-198
                            </h4>
                            <h5>Monday to Saturday, 10AM to 6PM</h5>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-1 d-flex text-center align-items-center">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="col-md-11">
                            <h4>
                                dbarbershop@gmail.com
                            </h4>
                            <h5>Email us your query</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 text-start">
                <form>
                    <div class="mb-3">
                      <input type="text" class="form-control" id="exampleInputName" placeholder="Enter your name" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" id="exampleInputEmail" placeholder="Enter email address" required>
                      </div>
                    <div class="mb-3">
                      <input type="text" class="form-control" id="exampleInputSubject" placeholder="Enter your subject" required>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Message</label>
                      </div>
                    <button type="submit" class="hero-btn red-btn">Submit</button>
                  </form>
            </div>
       </div>
    </div>
</section>
    
@endsection