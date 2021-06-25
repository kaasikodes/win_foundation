@extends('layouts.app1')
@section('content')
<main>
  @include('inc.messages')
    <!--Heading-->
    <div class="container-fluid heading" style="background-color: #000444;">
      <div class="container text-light pt-3 text-center pb-5">
        <h2 class="font-weight-bold mb-3">Membership</h2>
        <div style="background-color: blueviolet; width: 200px; " class="px-2 m-auto">
          <h5 >Enrollment Form</h5>
          
        </div>
       
        <p class="pt-3 text-white-80 font-weight-lighter animate__animated animate__fadeInUp">Thank you for your support. <br>May the God Lord continue to bless and provide for you.</p>
        
        <div class="alert py-1 my-5 text-white-50 alert-dismissible text-left" style="background: #5C6687; border-radius:0;">
          <button type="button" class="close my-auto" data-dismiss="alert" style="font-size:40px;">&times;</button>
          {!!Form::open(['action' => 'MembersController@verification','method'=>'post', 'class'=>''])!!}
          <div class="form-inline">
            <label for="email">Already a member, Enter your email to view and edit your details </label>
            <input type="email" name="email" id="" class="form-control ml-md-auto" style="border-radius: 0;" placeholder="Email Address">
            <button type="submit" class="btn-get-started ml-0 " style="border-radius:0;">Submit</button>
      
          </div>
          {!! Form::close() !!}
        </div>
      </div>
    </div><!--End of Heading-->
    <!--Info-->
    <div class="container my-5">
      {!!Form::open(['action' => 'MembersController@store','method'=>'post', 'class'=>'was-validated'])!!}
        <div class="form-group"><!--Use csrf - check wether this prevents bot submission-->
          <label for="name">Name:</label>
          <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
          
          <div class="invalid-feedback">Please fill out your name.</div>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
          
          <div class="invalid-feedback">Please fill out correct email address.</div>
        </div>
        <div class="form-group">
          <label for="phone">Phone:</label>
          <input type="number" class="form-control" id="phone" placeholder="Enter phone number" name="phone" required>
         
          <div class="invalid-feedback">Please fill out phone number.</div>
        </div>

        <div class="form-group">
          <label for="age">Age:</label>
          <input type="number" class="form-control" id="age" placeholder="Enter age" name="age" required>
         
          <div class="invalid-feedback">Please fill age.</div>
        </div>

        <div class="form-group">
            <label for="skills">What skill(s) do you possess:</label>
            <input type="text" class="form-control" id="skills" placeholder="E.g video editting, singing,..." name="skills" required>
           
            <div class="invalid-feedback">Please input a skill.</div>
        </div>
        
        <div class="form-group">
          <label for="occupation">Occupation:</label>
          <input type="text" class="form-control" id="occupation" placeholder="doctor" name="occupation" required>
         
          <div class="invalid-feedback">Please input an occupation.</div>
       </div>

        <div class="form-group">
            <label for="interests">What are you interested in:</label>
            <input type="text" class="form-control" id="interests" placeholder="E.g music,engineering" name="interests" required>
           
            <div class="invalid-feedback">Please input an interest.</div>
        </div>

        <div class="form-group">
          <label for="location">Address:</label><!-- This should be seperate and based on country and then state use ajax-->
          <input type="text" class="form-control" id="location" placeholder="Lagos, Nigeria" name="location" required>
         
          <div class="invalid-feedback">Please input a location.</div>
      </div>
        

        

        
        <div class="mx-auto">
          <button type="submit" class="btn-get-started mt-5 ml-auto ">Submit</button>

        </div>
        
      {!! Form::close() !!}
    </div>
    


</main><!-- End #main -->

    
@endsection