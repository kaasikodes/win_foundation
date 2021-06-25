@extends('layouts.app1')
@section('content')
<main>
    <!--Heading-->
    
    @if (isset($page))
    <hr>
    @include('inc.access_restrictor_edit')
    <div class="container-fluid heading pb-4" style="background-color: #000444;">
      <div class="container text-light text-center   pt-3 ">
          <h6 class="mt-3 " style="color: #F2A0CF;;">WIN FOUNDATION</h6>
          <h2 class="font-weight-bold ">{{$page->title}}</h2>
          
          
      </div>
    </div><!--End of Heading-->
    @include('inc.messages')
     <!--Info-->
      <!--pic side-->
    <div class="container py-5 my-3">
        <div class="row">
            <div class="col-sm-7 col-lg-7">
                <p class="">{!!$page->brief_description!!}</p>
                <div class="container pl-0" >
                  <a href="/becomeamember" class="btn-get-started ml-0 ">Become a Member</a>

                </div>
              
            </div>
            <div class="col-sm-5 col-lg-5">
              <div class="container pl-0" >
                  <div style="width:52vmin; " class="ml-lg-auto ml-md-auto ">
                      <img src="{{asset('/img/invest.jpg')}}" alt="" class="img-fluid ">

                  </div>
                 
              </div>

            </div>
        </div>
    </div> <!--end of pic side-->
    <div class="container-fluid"><hr></div>
    <div class="container pb-5">
        

        <div class="row">

          <div class="col-md-12 col-lg-12 text-center" >
            <div class="card my-5 p-4 bg-white shadow-lg">
              <div class="card-body text-left ">
                <p class="pt-4">{!!$page->main_description!!}</p>
      
                
                
      
                
      
                  
              </div>
            </div>
  
          </div>

          <div class="col-md-12 col-lg-12 text-center" >
            <a href="/becomeamember" class=" btn-get-started  my-5" style="font-size:1.3rem;">Join Now</a>
  
          </div>

        </div>
      
    </div>
     <!--End of Info-->
        
    @endif
   
    
</main><!-- End #main -->
    
@endsection