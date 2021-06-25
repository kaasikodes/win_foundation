@extends('layouts.app1')
@section('content')
<main>
  <form action="{{route('page.update',$page)}}" method="post">
   <div class="container-fluid p-0">
     <div class="row">
       <div class="col-12 order-1">
         <!--Heading-->
    <div class="container-fluid heading pb-4" style="background-color: #000444;">
      <div class="container text-light pt-3 ">
          <h6 class="mt-3" style="color: #F2A0CF;;">WIN FOUNDATION</h6>
          <div class=" row " >
              
              <div class="col-md-6 col-lg-6 col-xl-6 ">
                  
                  <h1 class="font-weight-bold ">Board Members</h1>

              </div>
              <div class="col-md-6 col-lg-6 col-xl-6 ">
                
                

                


            </div>

          </div>
      </div>
    </div><!--End of Heading-->
    <!--team members-->
    <section class="team container text-center"><!--Primary Team-->
      <div class="section-title">
        <h2>
          <div class="form-group">
            <label for="main_description">Title here</label>
            <input type="text" name="main_description" id="" class="form-control" value="Board Members">
          </div>
        </h2>
        
      </div>
      <div class="row" style="justify-content: space-around;">
        @if (isset($management))
          @foreach ($management as $person)
              <div class="col-xl-4 col-lg-4 col-md-6"  data-aos="fade-up">
              
                <div class="card my-4 member animate__animated animate__fadeInLeft">
                  <div class="pic">
                    <img class="card-img-top" src="{{asset('/img/team/team-1.jpg')}}" alt="Card image">
                  </div>
                  <div class="card-body team-item">
                    <h4 class="">{{$person->name}}</h4>
                    <span>{{$person->role}}</span>
      
                    <div class="card-text py-3">{!!$person->bio_data!!}</div>
                    <div class="social-links mt-3">
                  
                      <a href="tel:08134893723" target="_blank" class=""><i class="bx bx-phone-call"></i></a>
                      <a href="https://wa.me/08134893723?text=Hi%20from%20win%20foundation%20website" target="_blank" class=""><i class="bx bxl-whatsapp"></i></a>
                      <a href="mailto:member@winfoundation.online" target="_blank" class=""><i class="bx bx-envelope"></i></a>
                    </div>
                  </div>
                </div>
      
                
              </div>
                  
          @endforeach
            
        @endif
        
        

        

        
       
        

        

        
      </div>
    </section>
    <hr>
    <!--Secondary Team-->
    <section  class="team">
      <div class="container">

        <div class="section-title">
          <h2>
            <div class="form-group">
              <label for="brief_description">Title here</label>
              <input type="text" name="brief_description" id="" class="form-control" value="Management Team">
            </div>
          </h2>
          
        </div>

        <div class="row">

          @if (isset($secondary_team))
            @foreach ($secondary_team as $person)
            <div class="col-xl-4 col-lg-4 col-md-6" data-aos="fade-up">
              <div class="member">
                <div class="pic"><img src="{{asset('/img/team/team-2.jpg')}}" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>{{$person->name}}</h4>
                  <span>{{$person->role}}</span>
                  <div class="social">
                    <a href="tel:08134893723" target="_blank" class=""><i class="bx bx-phone-call"></i></a>
                    <a href="https://wa.me/08134893723?text=Hi%20from%20win%20foundation%20website" target="_blank" class=""><i class="bx bxl-whatsapp"></i></a>
                    <a href="mailto:member@winfoundation.online" target="_blank" class=""><i class="bx bx-envelope"></i></a>
                  </div>
                </div>
              </div>
            </div>
                
            @endforeach
              
          @endif

          

          


          

          

      </div>
    </section><!-- End Our Team Section -->
       </div>
       <div class="col-12 order-0">
         @csrf
        @if (!Auth::guest())
        @if (Auth::user()->id == 1)
        <hr>
        <div class="container card p-3 mt-4">
          <div class="row">
            <div class="col-7"> 
              <p class="text-muted">Click the save button to save your content</p>
            </div>
            <div class="col-5 ">
              @if ($page)
              <div class="container text-align-center bg-danger">

                @method('PUT')
                <button type="submit" class="btn btn-primary float-right">Save</button>
                  
                
              </div>
              
                  
              @endif
              
            </div>
          </div>
        </div>
        @endif
            
    @endif
       </div>
     </div>
   </div>
  </form>
    



</main><!-- End #main -->
    
@endsection