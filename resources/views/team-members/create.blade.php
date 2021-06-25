@extends('layouts.app1')
@section('content')
<main>
    @include('inc.messages')
    <!--Heading-->
    <div class="container-fluid heading" style="background-color: #000444;">
      <div class="container text-light pt-3 text-center pb-5">
        <h2 class="font-weight-bold mb-3">Approved Membership</h2>
        <div style="background-color: blueviolet; width: 200px; " class="px-2 m-auto">
          <h5 >Add a Member here</h5>
          
        </div>
       
        <p class="pt-3 text-white-80 font-weight-lighter animate__animated animate__fadeInUp">This form is created for you to be able to add a member as well as his/her role in win
            foundation
        </p>
        
        
      </div>
    </div><!--End of Heading-->
    <!--Info-->
    
    <div class="container my-5">
      {!!Form::open(['action' => 'TeamMembersController@store','method'=>'post', 'class'=>'was-validated'])!!}
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
          <label for="phone">Phone Number:</label>
          <input type="text" class="form-control" id="phone" placeholder="Enter phone number" name="phone" required>
          
          <div class="invalid-feedback">Please fill out correct phone number.</div>
        </div>
        <div class="form-group">
          <label for="category">Select Category:</label>
          <select class="form-control" id="category" name="category">
            <option value="Management Team">Management Team</option>
            <option value="Secondary Team">Secondary Team</option>
            
          </select>
        </div> 
        <div class="form-group">
          <label for="role">Role:</label>
          <input type="text" class="form-control" id="role" placeholder="e.g Trustee, Board Member" name="role" required>
         
          <div class="invalid-feedback">Please fill out the role of person.</div>
        </div>
  
        
  
        <div class="form-group">
          <label for="whatsapp">Whatsapp no:</label>
          <input type="text" class="form-control" id="whatsapp" placeholder="Enter whatsapp no." name="whatsapp" required>
         
          <div class="invalid-feedback">Please fill out whatsapp number.</div>
        </div>
  
        <div class="form-group">
          <label for="bio_data">Bio-Data:</label>
          <textarea class="form-control" id="bio_data" row="3" placeholder="Enter bio-data" name="bio_data" required></textarea>
          
          <div class="invalid-feedback">Please fill out bio-data.</div>
        </div>
        <script>
          CKEDITOR.replace('bio_data');
        </script>
  
  
        
        <div class="mx-auto">
          <button type="submit" class="btn-get-started mt-5 ml-auto ">Add</button>
  
        </div>
        
      {!! Form::close() !!}
    </div>
    
  
  
  </main><!-- End #main -->
    
@endsection