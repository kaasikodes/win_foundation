@extends('layouts.app1')
@section('content')

<main>
    <!--Heading-->
    <div class="container-fluid heading" style="background-color: #000444;">
      <div class="container text-light pt-3 text-center pb-5">
        <h2 class="font-weight-bold mb-3">Mission Medalist</h2>
        <div style="background-color: blueviolet; width: 200px; " class="px-2 m-auto">
          <h5 >Pick any package</h5>
          
        </div>
       
        <p class="pt-3 text-white-80 font-weight-lighter animate__animated animate__fadeInUp">Thank you for your support. <br>May the God Lord continue to bless and provide for you.</p>
        
        <form action="" method="post">

        </form>
      </div>
    </div><!--End of Heading-->
    <!--Info-->
    <div class="container packages my-5 text-center">
      <div class="row">
        <!--First-->
        <div class="col-lg-4 col-md-4">
          <div class="card bg-white shadow-sm">
            <img src="{{asset('/img/invest.jpg')}}" alt="" class="card-img-top">
            <div class="card-body">
              <h4 class="card-title">Bronze</h4>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, quaerat?</p>
              <a href="/donate/bronze/mission-medalist" class="btn-get-started">Get Started</a>
            </div>
          </div>
        </div>
        <!--second one-->
        <div class="col-lg-4 col-md-4">
          <div class="card shadow-lg">
            <img src="{{asset('/img/invest.jpg')}}" alt="" class="card-img-top">
            <div class="card-body">
              <h4 class="card-title">Silver</h4>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, quaerat?</p>
              <a href="/donate/silver/mission-medalist" class="btn-get-started">Get Started</a>
            </div>
          </div>
        </div>
        <!--Third One-->
        <div class="col-lg-4 col-md-4">
          <div class="card shadow-sm">
            <img src="{{asset('/img/invest.jpg')}}" alt="" class="card-img-top">
            <div class="card-body">
              <h4 class="card-title">Gold</h4>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, quaerat?</p>
              <a href="/donate/gold/mission-medalist" class="btn-get-started">Get Started</a>
            </div>
          </div>
        </div>
      </div>
    </div>
</main><!-- End #main -->
    
@endsection