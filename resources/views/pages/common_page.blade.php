@extends('layouts.app1')
@section('content')
    
  <main>
    <!--Heading-->
    <hr>
    @include('inc.access_restrictor_edit')

    @if ($page)
    <div class="container-fluid heading" style="background-color: #000444;">
      
      <div class="container text-light pt-3 ">
        <h6 class="mt-3" style="color: #F2A0CF;;">WIN FOUNDATION</h6>
          <div class=" row pb-4 " >
              <div class="col-md-6 col-lg-6 col-xl-6 ">
                  <h2 class="font-weight-bold">{{$page->title}}</h2>

              </div>
              <div class="col-md-6 col-lg-6 col-xl-6 ">
                <p class="text-white-50 font-weight-lighter pt-0">{!!$page->brief_description!!}</p>


            </div>

          </div>
      </div>
    </div><!--End of Heading-->
    <!--Info-->
    <div class="container">
      <div class="card my-5 p-4 bg-white shadow-lg">
        <div class="card-body text-left ">
          <p class="pt-4">{!!$page->main_description!!}</p>

          
          <a href="/be-a-prayer-warrior" class="btn-get-started">Join Us</a>

          

            
        </div>
      </div>
    </div>
        
    @endif
    
   



</main><!-- End #main -->
@endsection