@extends('layouts.app1')
@section('content')
<hr>
   


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
                  <p class="text-white-50 font-weight-lighter pt-2">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
  
  
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
            <p class="description">Celestial Diplomats&reg; Working on earth for the kingdom of heaven.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="icofont-earth"></i></div>
            <h4 class="title"><a href="">Our Mission</a></h4>
            <p class="description">To help people in all nations to become Christ-like in growth and actions - people truly winning in life.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="icofont-compass"></i></div>
            <h4 class="title"><a href="">Our Values</a></h4>
            <p class="description">Glorifying God,committed to biblical truth, dependent on Jehovah God, having Christ-like family and people of prayer, being church centered and Mission focused</p>
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
                <h4 class="">Gbade Ogundare</h4>
                <span>Trustee, Board Member, Secretary/Mission Director (Diplomat)</span>

                <p class="card-text py-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores laborum dolor labore!</p>
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
                <h4 class="">Margaret Ogundare</h4>
                <span>Trustee, Board Member, Vice Chiarperson (Diplomat)/</span>

                <p class="card-text py-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores laborum dolor labore!</p>
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
                <h4 class="">Prof. Isaac Ejembi Ocheke</h4>
                <span>Trustee, Board Member, Acting Chiarman (Diplomat)</span>

                <p class="card-text py-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores laborum dolor labore!</p>
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
                <h4 class="">Mrs. Asta Hassana Osawe</h4>
                <span>Trustee, Board Member, Treasurer (Diplomat)</span>

                <p class="card-text py-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores laborum dolor labore!</p>
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
                <h4 class="">Mr. Bartholomew Odeh</h4>
                <span>Board Member, Missionary Staff/Program Officer (Diplomat)</span>

                <p class="card-text py-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores laborum dolor labore!</p>
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
                <h4 class="">Mrs. Ramya Abubakar Osedoma</h4>
                <span>Missionary Staff/Program Officer</span>

                <p class="card-text py-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores laborum dolor labore!</p>
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
                  <p class="text-white-50">We approach Ministry vis-a-vis Money with a 'made-up mind' that 'godliness'
                    is not a means to financial gain' but that godliness with cotentment is great gain. (see 1 Timothy 6:5b,6).
                    One of our Mission's strategy is to find relevance in Kingdom affairs, looking into the society and where
                    needs are found to design programs to meet such needs. In such relevance consciousness and looking we note the need
                    to urgently do the following amongst many things we are commanded to do:
                    <ul>
                      <li>To complement the church</li>
                      <li>To envaglize and to disciple</li>
                      <li>To call out people for Collective, Disciplined, Regular, & Effective Praying (3 pm Pause & Pray&reg;)</li>
                      <li>To encourage teens and youths to become missionaries</li>
                      <li>To encorage and raise support for missionaries (Mission Medalist Program - Everyone a Winner &reg;)</li>
                      <li>To appreciate and raise support for Pastors in Rural Area to enjoy Annual Leave</li>
                    </ul>
                  </p>
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
            <p>
              As soon as you remember or chanced. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
            </p>
          </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="100">
            <h4>How can I support you with my skillset?</h4>
            <p>
              Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
            </p>
          </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="200">
            <h4>How can I make donations?</h4>
            <p>
              Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus.
            </p>
          </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="300">
            <h4>Why should I become a missionary?</h4>
            <p>
              Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
            </p>
          </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="400">
            <h4>How do I become a member of the team?</h4>
            <p>
              Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
            </p>
          </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="500">
            <h4>How do I submit a prayer point?</h4>
            <p>
              Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
            </p>
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