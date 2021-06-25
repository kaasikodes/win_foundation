@extends('layouts.app1')
@section('content')
<main>
   <hr>
   @include('inc.access_restrictor_edit')
    @if ($page)
      <!--Heading-->
    <div class="container-fluid heading pb-4" style="background-color: #000444;">
      <div class="container text-light pt-3 ">
          <h6 class="mt-3" style="color: #F2A0CF;;">WIN FOUNDATION</h6>
          <div class=" row " >
              
              <div class="col-md-6 col-lg-6 col-xl-6 ">
                  
                  <h2 class="font-weight-bold ">{{$page->title}}</h2>

              </div>
              <div class="col-md-6 col-lg-6 col-xl-6 ">
                <p class="text-white-50 font-weight-lighter pt-0">{!!$page->brief_description!!}
                </p>
                

                <a href="donate/default/mission-medalist" class="btn-get-started-inverse float-right">Become a Medalist</a>



            </div>

          </div>
      </div>
    </div><!--End of Heading-->
    <!--Info-->
    <div class="container text-center pt-5">
      <div class="p">
        <p>{!!$page->introduction!!}</p>

      </div>
      <div class=" container packages mt-5">
        <div class="row">
          @if ($packages)
            @foreach ($packages as $package)
              <!--First-->
              <div class="col-lg-4 col-md-4">
                <div class="card bg-white shadow-sm">
                  <img src="{{asset('/img/invest.jpg')}}" alt="" class="card-img-top">
                  <div class="card-body">
                    <h4 class="card-title">{{$package->title}}</h4>
                    <p class="card-text">{!!$package->package_description!!}</p>
                    <a href="/donate/bronze/mission-medalist" class="btn-get-started">Get Started</a>
                  </div>
                </div>
              </div>
                
            @endforeach
              
          @endif
          
          
          
        </div>
        <!--More Info-->
        <div class="container text-left my-5">
          <p>{!!$page->main_description!!}</p>
          
          
          
          

          
        </div>
        <div class="container mb-5">
          <a href="/donate/default/mission-medalist" class="btn-get-started mx-lg-auto text-center">Become a Medalist</a>
        </div>


      </div>
    </div>

        
    @endif


</main><!-- End #main -->
    
@endsection