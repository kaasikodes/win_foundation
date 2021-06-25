@extends('layouts.app1')
@section('content')
<main>
    <!--Heading-->
    <hr>
    @include('inc.access_restrictor_edit')
    <hr>
    <div class="container-fluid heading pb-4" ">
      <div class="container  pt-3 ">
          <h6 class="mt-3" style="color: #F2A0CF;">WIN FOUNDATION</h6>
          <div class=" row " >
              
              <div class="col-md-6 col-lg-6 col-xl-6 ">
                  
                  <h1 class="font-weight-bold " style="color: #000444; margin-top: -14px;">CALL TO INVEST</h1>
                  <p class="text-black-50 pt-2">
                      {!!$page->main_description!!}
                  </p>

                  <a href="pa.html" class="btn-get-started float-left ml-auto mt-3">Invest Now</a>
                  

              </div>
              <div class="col-md-6 col-lg-6 col-xl-6 ">
                  <div class="container pl-0" >
                      <div style="width:67vmin; " class="ml-lg-auto ml-md-auto ">
                          <img src="{{asset('/img/invest.jpg')}}" alt="" class="img-fluid ">

                      </div>
                     
                  </div>
                

                



            </div>

          </div>
      </div>
    </div><!--End of Heading-->
    <!--Info-->
    <!--Secondary Heading-->
    <div class="container-fluid heading my-4" style="background-color: #000444;">
      <div class="container text-light py-4 ">
          
          <div class=" row " >
              
              <div class="col-md-6 col-lg-6 col-xl-6 ">
                  
                  <h2 class="font-weight-bold ">Investment Portfolio</h2>

              </div>
              <div class="col-md-6 col-lg-6 col-xl-6 ">
                <p class="text-white-50 font-weight-lighter pt-2">
                    {!!$page->brief_description!!}
                </p>
                

                


            </div>

          </div>
      </div>
    </div><!--End of Secondary Heading-->
     <!-- ======= About Lists Section ======= -->
      <section class="about-lists mb-5">
          <div class="container">

            @if (isset($budgets))
            <div class="row no-gutters">
                @foreach ($budgets as $budget)
                <div class="col-lg-6 col-md-6 content-item" data-aos="fade-up">
                    <h4>{{$budget->page->title}}</h4>
                    <span><strong>Budget - </strong>${{$budget->amount}}</span>
                    <p class="pt-1 pb-3">{!!$budget->page->brief_description!!}</p>
                    <div class="container pl-0 mt-4" >
                        <a href="/donate/pastors-appreciation" class="btn-get-started ml-0 ">Fund</a>
  
                    </div>
                
                
                
                </div>
                    
                @endforeach

                
                
  
            </div>
                
            @endif
          <hr style="background-color: #d9e8f4;">

          </div>
      </section><!-- End About Lists Section -->

    <!--end of info-->
   
   

</main><!-- End #main -->
  

    
@endsection