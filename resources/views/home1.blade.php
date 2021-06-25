@extends('layouts.app1')
@section('content')
<hr>
    @include('inc.access_restrictor_edit')


  @include('inc.hero')


  

    
  
<main >

    <!-- ======= welcome Section ======= -->
    <section>
      <div class="container-fluid heading m-0 p-0" style="background-color: #000444; ">
        
        <div class="container text-light pt-3 ">
          <h6 class="mt-3" style="color: #fff; font-size: 1.4rem; margin-bottom: -5px;">Welcome to,</h6>
            <div class=" row pb-4 " >
                <div class="col-md-6 col-lg-6 col-xl-6 ">
                    <h2 class="font-weight-bold">WIN Foundation</h2>
  
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 ">
                  <div class="text-white-50 font-weight-lighter pt-2">
                    {!!$page->extra->welcome!!}
                    
                  </div>
  
              </div>
  
            </div>
        </div>
      </div>
    </section><!-- End welcome Section -->

    <!-- ======= Services Section ======= -->
    <section  class="services py-5">
      <div class="container">

        <div class="section-title">
          <h2>What we Represent</h2>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
            <div class="icon"><i class="icofont-look"></i></div>
            <h4 class="title"><a href="">Our Vision</a></h4>
            <p class="description">{!!$page->extra->vision!!}</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="icofont-earth"></i></div>
            <h4 class="title"><a href="">Our Mission</a></h4>
            <p class="description">{!!$page->extra->mission!!}.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="icofont-compass"></i></div>
            <h4 class="title"><a href="">Our Values</a></h4>
            <p class="description">{!!$page->extra->values!!}</p>
          </div>
          
        </div>

      </div>
    </section><!-- End Services Section -->


    

    <!-- ======= Team Section ======= -->
    <section class=" py-5 section-bg">
      <div class="container">
        <h6 class="mt-3" style="color: #F2A0CF;;">WIN FOUNDATION</h6>
            <div class=" row pb-0" >
                <div class="col-md-6 col-lg-6 col-xl-6 ">
                    <h2 class="font-weight-bold" style="color: #000444; font-size: 2.2rem;">Ministry Team</h2>
  
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 ">
                  
  
              </div>
              
              
  
            </div>
            <section  class="team" style="background: none;">
              <div class="container">
                 <div class="row" style="justify-content: space-around;">
          
          <div class="col-xl-4 col-lg-4 col-md-6 order-2"  data-aos="fade-up">
            
            <div class="card my-2 member">
              <div class="pic">
                <img class="card-img-top" src="{{asset('img/team/team-1.jpg')}}" alt="Card image">
              </div>
              <div class="card-body team-item">
                <h4 class="">{!!$page->extra->name1!!}</h4>
                <span>{!!$page->extra->role1!!}</span>

               
                <div class="social-links mt-3">
              
                  <a href="tel:08134893723" target="_blank" class=""><i class="bx bx-phone-call"></i></a>
                  <a href="https://wa.me/08134893723?text=Hi%20from%20win%20foundation%20website" target="_blank" class=""><i class="bx bxl-whatsapp"></i></a>
                  <a href="mailto:member@winfoundation.online" target="_blank" class=""><i class="bx bx-envelope"></i></a>
                </div>
              </div>
            </div>

            
          </div>

          <div class="col-xl-4 col-lg-4 col-md-6 order-3"  data-aos="fade-up">
            
            <div class="card my-2 member">
              <div class="pic">
                <img class="card-img-top" src="{{asset('img/team/team-3.jpg')}}" alt="Card image">
              </div>
              <div class="card-body team-item">
                <h4 class="">{!!$page->extra->name2!!}</h4>
                <span>{!!$page->extra->role2!!}</span>

                
                <div class="social-links mt-3">
              
                  <a href="tel:08134893723" target="_blank" class=""><i class="bx bx-phone-call"></i></a>
                  <a href="https://wa.me/08134893723?text=Hi%20from%20win%20foundation%20website" target="_blank" class=""><i class="bx bxl-whatsapp"></i></a>
                  <a href="mailto:member@winfoundation.online" target="_blank" class=""><i class="bx bx-envelope"></i></a>
                </div>
              </div>
            </div>

            
          </div>

          <div class="col-xl-4 col-lg-4 col-md-6 order-1"  data-aos="fade-up">
            
            <div class="card my-2 member">
              <div class="pic">
                <img class="card-img-top" src="{{asset('img/team/team-2.jpg')}}" alt="Card image">
              </div>
              <div class="card-body team-item">
                <h4 class="">{!!$page->extra->name3!!}</h4>
                <span>{!!$page->extra->role3!!}</span>

                
                <div class="social-links mt-3">
              
                  <a href="tel:08134893723" target="_blank" class=""><i class="bx bx-phone-call"></i></a>
                  <a href="https://wa.me/08134893723?text=Hi%20from%20win%20foundation%20website" target="_blank" class=""><i class="bx bxl-whatsapp"></i></a>
                  <a href="mailto:member@winfoundation.online" target="_blank" class=""><i class="bx bx-envelope"></i></a>
                </div>
              </div>
            </div>

            
          </div>
          <!--other part of team-->
          <div class="col-xl-4 col-lg-4 col-md-6 order-4"  data-aos="fade-up">
            
            <div class="card mt-5 member">
              <div class="pic">
                <img class="card-img-top" src="{{asset('img/team/team-4.jpg')}}" alt="Card image">
              </div>
              <div class="card-body team-item">
                <h4 class="">{!!$page->extra->name4!!}</h4>
                <span>{!!$page->extra->role4!!}</span>

               
                <div class="social-links mt-3">
              
                  <a href="tel:08134893723" target="_blank" class=""><i class="bx bx-phone-call"></i></a>
                  <a href="https://wa.me/08134893723?text=Hi%20from%20win%20foundation%20website" target="_blank" class=""><i class="bx bxl-whatsapp"></i></a>
                  <a href="mailto:member@winfoundation.online" target="_blank" class=""><i class="bx bx-envelope"></i></a>
                </div>
              </div>
            </div>

            
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 order-5"  data-aos="fade-up">
            
            <div class="card mt-5 member">
              <div class="pic">
                <img class="card-img-top" src="{{asset('img/team/team-5.jpg')}}" alt="Card image">
              </div>
              
              <div class="card-body team-item">
                <h4 class="">{!!$page->extra->name5!!}</h4>
                <span>{!!$page->extra->role5!!}</span>

                
                <div class="social-links mt-3">
              
                  <a href="tel:08134893723" target="_blank" class=""><i class="bx bx-phone-call"></i></a>
                  <a href="https://wa.me/08134893723?text=Hi%20from%20win%20foundation%20website" target="_blank" class=""><i class="bx bxl-whatsapp"></i></a>
                  <a href="mailto:member@winfoundation.online" target="_blank" class=""><i class="bx bx-envelope"></i></a>
                </div>
              </div>

              
            </div>

            
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 order-6"  data-aos="fade-up">
            
            <div class="card mt-5 member">
              <div class="pic">
                <img class="card-img-top" src="{{asset('img/team/team-5.jpg')}}" alt="Card image">
              </div>
              <div class="card-body team-item">
                <h4 class="">{!!$page->extra->name6!!}</h4>
                <span>{!!$page->extra->role6!!}</span>

                
                <div class="social-links mt-3">
              
                  <a href="tel:08134893723" target="_blank" class=""><i class="bx bx-phone-call"></i></a>
                  <a href="https://wa.me/08134893723?text=Hi%20from%20win%20foundation%20website" target="_blank" class=""><i class="bx bxl-whatsapp"></i></a>
                  <a href="mailto:member@winfoundation.online" target="_blank" class=""><i class="bx bx-envelope"></i></a>
                </div>
              </div>
              
              

              
            </div>

            
          </div>
          <!--
            
          -->

          

          
        </div>
              </div>
              
            </section><!-- End Our Team Section -->
       

        

      </div>
    </section><!-- End Team Section -->
    
    <!-- ======= DonATE Section ======= -->
    <div class="container-fluid heading py-4" style="background-color: #000444;">
        
      <div class="container text-light pt-3 ">
        <h6 class="mt-3" style="color: #F2A0CF;;">WIN FOUNDATION</h6>
          <div class=" row pb-4 " style="justify-content: start; " >
              <div class="col-md-6 col-lg-6 col-xl-6 " >
                  <h2 class="font-weight-bold">Fund Raising</h2>
                  <div class="text-white-50">
                    {!!$page->extra->fund!!}
                  </div>
                      <div class="container text-left px-0">
                        <a href="/donate" class="btn-get-started-inverse ml-0">Donate</a>
                      </div>

              </div>
              <div class="col-md-6 col-lg-6 col-xl-6 ">
                
                <div class="container px-0">
                  <div class="row">
                    <div class="col-md-12 col-lg-12">
                      <div class = "ml-0 ml-md-auto"style="width:60vmin; height:5vmin; margin:30px 4px">
                        <h5>Pastors Appreciation - 50%</h5>
                        <div class = "ml-auto"style="width:100%; height:100%; background-color:#fff;">
                          <div style="background-color: #F2A0CF; width: 50%; height: 100%;"></div>
                        
                        </div>
                      </div>
                    </div>

                    <div class="col-md-12 col-lg-12">
                      <div class = "ml-0 ml-md-auto"style="width:60vmin; height:5vmin; margin:30px 4px">
                        <h5>Mission Medalist - 70%</h5>
                        <div class = "ml-auto"style="width:100%; height:100%; background-color:#fff;">
                          <div style="background-color: #F2A0CF; width: 70%; height: 100%;"></div>
                        
                        </div>
                      </div>
                    </div>

                    <div class="col-md-12 col-lg-12">
                      <div class = "ml-0 ml-md-auto"style="width:60vmin; height:5vmin; margin:30px 4px">
                        <h5>Memorial Gifts - 20%</h5>
                        <div class = "ml-auto"style="width:100%; height:100%; background-color:#fff;">
                          <div style="background-color: #F2A0CF; width: 20%; height: 100%;"></div>
                        
                        </div>
                      </div>
                    </div>

                    <div class="col-md-12 col-lg-12">
                      <div class = "ml-0 ml-md-auto"style="width:60vmin; height:5vmin; margin:30px 4px">
                        <h5>3pm Pause and Pray - 85%</h5>
                        <div class = "ml-auto"style="width:100%; height:100%; background-color:#fff;">
                          <div style="background-color: #F2A0CF; width: 85%; height: 100%;"></div>
                        
                        </div>
                      </div>
                    </div>

                    
                  </div>
                </div>

                

                

                
                



            </div>

          </div>
      </div>
    </div>
    
    <!-- ======= end of donate Section ======= -->

    


   

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg py-5">
      <div class="container">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
        </div>

        <div class="row  d-flex align-items-stretch">

          <div class="col-lg-6 faq-item" data-aos="fade-up">
            <h4>Suppose I forgot or I'm not chanced to pray starting from 3:00pm?</h4>
            {!!$page->extra->q1!!}
          </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="100">
            <h4>How can I support you with my skillset?</h4>
            {!!$page->extra->q2!!}
          </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="200">
            <h4>How can I make donations?</h4>
            {!!$page->extra->q3!!}
          </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="300">
            <h4>Why should I become a missionary?</h4>
            {!!$page->extra->q4!!}
          </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="400">
            <h4>How do I become a member of the team?</h4>
            {!!$page->extra->q5!!}
          </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="500">
            <h4>How do I submit a prayer point?</h4>
            {!!$page->extra->q6!!}
          </div>

        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact py-5">
      <div class="container">

        <div class="section-title">
          <h2>Contact Us</h2>
        </div>

        <div class="row">

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
              <p><a href="mailto:admin@winfoundation.online" target="_blank" >admin@winfoundation.online</a>
                <br><a href="tel:finance@winfoundation.online" target="_blank">finance@winfoundation.online</a><br>
                <a href="tel:finance@winfoundation.online" target="_blank">programs@winfoundation.online</a></p>
            </div>
          </div>

          <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="info-box ">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p> <a href="tel:08035524215" target="_blank" >0803 552 4215</a> <br>
                <a href="tel:08035524215" target="_blank" >0803 552 4215</a> <br>
                <a href="tel:08035524215" target="_blank" >0803 552 4215</a> <br>
                <a href="tel:08035524215" target="_blank" >0803 552 4215</a>
              </p>
            </div>
          </div>

          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
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
              <input type="hidden" name="home" value="1">
              <div class="text-center"><button type="submit">Send Message</button></div>
            {!! Form::close() !!}
          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->

  </main><!-- End #main -->
    
  
    
    
  
    
  
  
    
@endsection