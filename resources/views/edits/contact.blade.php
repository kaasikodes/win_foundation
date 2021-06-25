@extends('layouts.app1')
@section('content')
<main>
    <!--Heading-->
    <hr>
    
    <!-- ======= Contact Us Section ======= -->
  <section id="contact" class="contact" style="padding-top: 5px;">
      <div class="container">

        <div class="section-title font-weight-bolder">
          <h2 style="color: #000444;">Contact Us</h2>
        </div>

        <div class="row">

         

          <div class="col-lg-12 mb-5" data-aos="fade-up" data-aos-delay="300">
            
            {!!Form::open(['action' => 'MessagesController@store','method'=>'post', 'class'=>'php-email-form'])!!}
              <div class="form-row">
                <div class="col-lg-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-lg-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              
              
              <div class="text-center"><button type="submit">Send Message</button></div>
            
              {!! Form::close() !!}
          </div>
          <!--Conctboxes-->
          <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
              <div class="info-box">
                <i class="bx bx-map"></i>
                <h3>Our Address</h3>
                <p>Behind Mr. Biggs,
                  Anglo-Jos, Jos,<br>
                  Plateau State,
                  Nigeria.
                  </p>
              </div>
            </div>
            <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
              <div class="info-box">
                <i class="bx bx-package"></i>
                <h3>Our Postal Address</h3>
                <p>The World-in-Need(WIN) Foundation,Inc.
                  P.O. Box 6165, Jos,
                  Plateau State,
                  Nigeria.
                  </p>
              </div>
            </div>
  
            <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
              <div class="info-box">
                <i class="bx bx-envelope"></i>
                <h3>Email Us</h3>
                <p>admin@winfoundation.online<br>finance@winfoundation.online</p>
              </div>
            </div>
  
            <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
              <div class="info-box ">
                <i class="bx bx-phone-call"></i>
                <h3>Call Us</h3>
                <p>0803 552 4215<br>0803 552 4215<br>0803 552 4215<br>0803 552 4215</p>
              </div>
            </div>
          <!--End of contctboxes-->

        </div>

      </div>
    </section><!-- End Contact Us Section -->

</main><!-- End #main -->

    
@endsection