@extends('layouts.app1')
@section('content')
<main>
  @include('inc.messages')
  <!--Heading-->
  <div class="container-fluid heading" style="background-color: #000444;">
    <div class="container text-light pt-3 text-center pb-5">
      <h2 class="font-weight-bold mb-3">3pm Pause and Pray</h2>
      <div style="background-color: blueviolet; width: 200px; " class="px-2 m-auto">
        <h5 >Enrollment Form</h5>
        
      </div>
     
      <p class="pt-3 text-white-80 font-weight-lighter animate__animated animate__fadeInUp">Thank you for joining us in prayer. <br>May the God Lord continue to bless and provide for you.</p>
      
      <div class="alert py-1 my-5 text-white-50 alert-dismissible text-left" style="background: #5C6687; border-radius:0;">
        <button type="button" class="close my-auto" data-dismiss="alert" style="font-size:40px;">&times;</button>
        {!!Form::open(['action' => 'PPVolunteersController@verification','method'=>'post', 'class'=>''])!!}
        <div class="form-inline">
          <label for="email">Already enrolled, Enter your email to view and edit your details </label>
          <input type="email" name="email" id="" class="form-control ml-md-auto" style="border-radius: 0;" placeholder="Email Address">
          <button type="submit" class="btn-get-started ml-0 " style="border-radius:0;">Submit</button>
    
        </div>
        {!! Form::close() !!}
      </div>
    </div>
  </div><!--End of Heading-->
  <!--Info-->
  
  <div class="container my-5">
    {!!Form::open(['action' => 'PPVolunteersController@store','method'=>'post', 'class'=>'was-validated'])!!}
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
        <label for="location">Address:</label>
        <input type="text" class="form-control" id="email" placeholder="Enter physical address" name="location" required>
        
        <div class="invalid-feedback">Please fill out correct physical address.</div>
      </div>
      <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="number" class="form-control" id="phone" placeholder="Enter phone number" name="phone" required>
       
        <div class="invalid-feedback">Please fill out phone number.</div>
      </div>

      <div class="form-group">
        <label for="role">I am willing to serve as :</label>
       <div class="container px-5">
         <div class="row">
           <!-- role 1-->
           <div class="col-md-4 col-lg-4">
            
            <div class="form-group form-check">
             <label class="form-check-label">
               <input class="form-check-input" type="checkbox" name="area" value=1 > Area Prayer Co-ordinator
               
             </label>
            </div>
           </div>

           <!-- role 2-->
           <div class="col-md-4 col-lg-4">
            
            <div class="form-group form-check">
             <label class="form-check-label">
               <input class="form-check-input" type="checkbox" name="state"  value=1 > State Prayer Co-ordinator
               
             </label>
            </div>
           </div>

           <!-- role 3-->
           <div class="col-md-4 col-lg-4">
            
            <div class="form-group form-check">
             <label class="form-check-label">
               <input class="form-check-input" type="checkbox" name="zonal" value=1 > Zonal Prayer Co-ordinator
               
             </label>
            </div>
           </div>
           
          

           
          
         </div> 
      </div>

      <div class="form-group">
        <label for="phone">Fax:</label>
        <input type="text" class="form-control" id="fax" placeholder="Enter fax number" name="fax" required>
       
        <div class="invalid-feedback">Please fill out fax number.</div>
      </div>

      <div class="form-group">
        <label for="postal-address">Postal Address:</label>
        <input type="text" class="form-control" id="postal-address" placeholder="Enter postal address" name="postal-address" required>
       
        <div class="invalid-feedback">Please fill out postal address.</div>
      </div>


      <div class="form-group form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" name="providingStatus" value=1 > I am willing to provide items for prayer.
          <div class="valid-feedback">Thank you.</div>
          <div class="invalid-feedback font-primary">We really would appreciate this!</div>
        </label>
      </div>
      <div class="mx-auto">
        <button type="submit" class="btn-get-started mt-5 ml-auto ">Submit</button>

      </div>
      
    {!! Form::close() !!}
  </div>
  


</main><!-- End #main -->

    
@endsection