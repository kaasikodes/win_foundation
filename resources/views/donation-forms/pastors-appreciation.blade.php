@extends('layouts.app1')
@section('content')

<main>
    <!--Heading-->
    <div class="container-fluid heading" style="background-color: #000444;">
      <div class="container text-light pt-3 text-center pb-5">
        <h2 class="font-weight-bold mb-3">Mission Medalist</h2>
        <div style="background-color: blueviolet; width: 200px; " class="px-2 m-auto">
          <h5 >Enrollment Form</h5>
          
        </div>
       
        <p class="pt-3 text-white-80 font-weight-lighter animate__animated animate__fadeInUp">Thank you for your support. <br>May the God Lord continue to bless and provide for you.</p>
        
        <form action="" method="post">

        </form>
      </div>
    </div><!--End of Heading-->
    <!--Info-->
    <div class="container my-5">
        {!!Form::open(['action' => 'App\Http\Controllers\FormsController@storemembers','class'=>'was-validated'])!!}
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
          
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
          
          <div class="invalid-feedback">Please fill out correct email address.</div>
        </div>
        <div class="form-group">
          <label for="phone">Phone:</label>
          <input type="text" class="form-control" id="phone" placeholder="Enter phone number" name="phone" required>
         
          <div class="invalid-feedback">Please fill out phone number.</div>
        </div>
        

        

        
        <div class="mx-auto">
          <button type="submit" class="btn-get-started mt-5 ml-auto ">Submit</button>

        </div>
        
        {!! Form::close() !!}
    </div>
    


</main><!-- End #main -->
    
@endsection