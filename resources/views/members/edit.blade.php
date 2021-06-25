@extends('layouts.app1')
@section('content')
<main>
    <!--Heading-->
    <div class="container-fluid heading" style="background-color: #000444;">
      <div class="container text-light pt-3 text-center pb-5">
        <h2 class="font-weight-bold mb-3">Membership</h2>
        <div style="background-color: blueviolet; width: 200px; " class="px-2 m-auto">
          <h5 >Edit your Deatils</h5>
          
        </div>
       
        <p class="pt-3 text-white-80 font-weight-lighter animate__animated animate__fadeInUp">Thank you for your support. <br>May the God Lord continue to bless and provide for you.</p>
        
        
      </div>
    </div><!--End of Heading-->
    <!--Info-->
    @if (isset($member))
    <div class="container my-5">
        {!!Form::open(['action' => ['MembersController@update',$member->id],'method'=>'post', 'class'=>'was-validated'])!!}
          <div class="form-group"><!--Use csrf - check wether this prevents bot submission-->
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{$member->name}}" required>
            
            <div class="invalid-feedback">Please fill out your name.</div>
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="{{$member->email}}" required>
            
            <div class="invalid-feedback">Please fill out correct email address.</div>
          </div>
          <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="number" class="form-control" id="phone" placeholder="Enter phone number" name="phone" value="{{$member->phone}}" required>
           
            <div class="invalid-feedback">Please fill out phone number.</div>
          </div>
  
          <div class="form-group">
            <label for="age">Age:</label>
            <input type="number" class="form-control" id="age" placeholder="Enter age" name="age" value="{{$member->data->age}}" required>
           
            <div class="invalid-feedback">Please fill age.</div>
          </div>
  
          <div class="form-group">
              <label for="skills">What skill(s) do you possess:</label>
              <input type="text" class="form-control" id="skills" placeholder="E.g video editting, singing,..." name="skills"value="{{$member->data->skills}}" required>
             
              <div class="invalid-feedback">Please input a skill.</div>
          </div>
          
          <div class="form-group">
            <label for="occupation">Occupation:</label>
            <input type="text" class="form-control" id="occupation" placeholder="doctor" name="occupation" value="{{$member->data->occupation}} "required>
           
            <div class="invalid-feedback">Please input an occupation.</div>
          </div>
  
          <div class="form-group">
              <label for="interests">What are you interested in:</label>
              <input type="text" class="form-control" id="interests" placeholder="E.g music,engineering" name="interests" value="{{$member->data->interests}}" required>
             
              <div class="invalid-feedback">Please input an interest.</div>
          </div>
  
          <div class="form-group">
            <label for="location">Address:</label><!-- This should be seperate and based on country and then state use ajax-->
            <input type="text" class="form-control" id="location" placeholder="Lagos, Nigeria" name="location" value="{{$member->data->location}}" required>
           
            <div class="invalid-feedback">Please input a location.</div>
          </div>
          
        {{Form::hidden('_method','PUT')}}
  
          
  
          
          <div class="mx-auto ">
            <button type="submit" class="btn-get-started mt-5 ml-auto ">Update</button>
  
          </div>
          
        {!! Form::close() !!}
      </div>
        
    @endif
    
    


</main><!-- End #main -->

    
@endsection