@extends('layouts.app1')
@section('content')
<main>
    <hr>
    @include('inc.access_restrictor_edit')
    <!--Heading-->
    <div class="container-fluid heading pb-4" style="background-color: #000444;">
      <div class="container text-light text-center   pt-3 ">
          <h6 class="mt-3 " style="color: #F2A0CF;;">WIN FOUNDATION</h6>
          <h2 class="font-weight-bold ">Our Statements</h2>
          
          
      </div>
    </div><!--End of Heading-->
    <!--info-->
    <div class="container my-5">
       {!!$page->main_description!!}
    </div>
    
   
    
</main><!-- End #main -->
    
@endsection