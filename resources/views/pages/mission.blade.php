@extends('layouts.app1')
@section('content')
<main>
  <hr>
    @include('inc.access_restrictor_edit')
    <!--Heading-->
    <div class="container-fluid heading pb-4" style="background-color: #000444;">
      <div class="container text-light text-center   pt-3 ">
          <h6 class="mt-3 " style="color: #F2A0CF;;">WIN FOUNDATION</h6>
          <h2 class="font-weight-bold ">Our Mission, Commission, or Command</h2>
          <div class="text-white-50">{!!$page->brief_description!!}</div>
          
          
      </div>
    </div><!--End of Heading-->
    <!--info-->
    <div class="container my-5 text-center">
       <div class="row">
           <!--First-->
           @if (isset($aspects))
              @for ($i = 0; $i < count($aspects); $i++)
                <div class="col-lg-12 col-md-12">
                  <div class="card bg-white shadow-sm my-4 pb-5">
                    <img src="{{asset('/img/evangelize.jpg')}}" alt="" class="card-img-top">
                    <div class="card-body">
                      <h4 class="card-title font-weight-bold" style="color: #000444;">{!!$aspects[$i]->title!!}</h4>
                      <div class="card-text">
                        {!!$aspects[$i]->description!!}
                      </div>
                      
              
                    </div>
                  </div>
                </div>
                  
              @endfor
               
           @endif
          

          

          
       </div>
    </div>
    
   
    
</main><!-- End #main -->
@endsection