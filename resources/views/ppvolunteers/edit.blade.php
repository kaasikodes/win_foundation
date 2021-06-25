@extends('layouts.app1')
@section('content')
<main>
    <!--Heading-->
    <div class="container-fluid heading" style="background-color: #000444;">
      <div class="container text-light pt-3 text-center pb-5">
        <h2 class="font-weight-bold mb-3">3pm Pause & Pray</h2>
        <div style="background-color: blueviolet; width: 200px; " class="px-2 m-auto">
          <h5 >Edit your Details</h5>
          
        </div>
       
        <p class="pt-3 text-white-80 font-weight-lighter animate__animated animate__fadeInUp">Thank you for your support. <br>May the God Lord continue to bless and provide for you.</p>
        
        
      </div>
    </div><!--End of Heading-->
    <!--Info-->
    @if (isset($volunteer))
    
       <div class="container my-5 py-4">
        {!!Form::open(['action' => 'PPVolunteersController@store','method'=>'post', 'class'=>'was-validated'])!!}
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{$volunteer->name}}" required>
          
          <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="{{$volunteer->email}}" required>
          
          <div class="invalid-feedback">Please fill out correct email address.</div>
        </div>
        <div class="form-group">
          <label for="location">Address:</label>
          <input type="text" class="form-control" id="email" placeholder="Enter physical address" value="{{$volunteer->data->location}}" name="location" required>
          
          <div class="invalid-feedback">Please fill out correct physical address.</div>
        </div>
        <div class="form-group">
          <label for="phone">Phone:</label>
          <input type="text" class="form-control" id="phone" placeholder="Enter phone number" value="{{$volunteer->phone}}" name="phone" >
         
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
                 @if ($volunteer->ppvolunteer->areaCoordinator == 1)
                     <input class="form-check-input" type="checkbox" name="area" value=1 checked>
                     
                 @else
                     <input class="form-check-input" type="checkbox" name="area" value=1 >
                 @endif
                  Area Prayer Co-ordinator
                 
               </label>
              </div>
             </div>
  
             <!-- role 2-->
             <div class="col-md-4 col-lg-4">
              
              <div class="form-group form-check">
               <label class="form-check-label">
                 @if ($volunteer->ppvolunteer->stateCoordinator == 1)
                      <input class="form-check-input" type="checkbox" name="state"  value=1 checked>
                 @else
                      <input class="form-check-input" type="checkbox" name="state"  value=1 >
                 @endif
                State Prayer Co-ordinator
                 
               </label>
              </div>
             </div>
  
             <!-- role 3-->
             <div class="col-md-4 col-lg-4">
              
              <div class="form-group form-check">
               <label class="form-check-label">
                 @if ($volunteer->ppvolunteer->zonalCoordinator == 1)
                     <input class="form-check-input" type="checkbox" name="zonal" value=1 checked> 
                 @else
                     <input class="form-check-input" type="checkbox" name="zonal" value=1 > 
                 @endif
                 Zonal Prayer Co-ordinator
                 
               </label>
              </div>
             </div>
             
            
  
             
            
           </div> 
        </div>
  
        <div class="form-group">
          <label for="phone">Fax:</label>
          <input type="text" class="form-control" id="fax" placeholder="Enter fax number" name="fax" value="{{$volunteer->data->fax}}" required>
         
          <div class="invalid-feedback">Please fill out fax number.</div>
        </div>
  
        <div class="form-group">
          <label for="postal-address">Postal Address:</label>
          <input type="text" class="form-control" id="postal-address" placeholder="Enter postal address" name="postal-address" value="{{$volunteer->data->postalAddress}}" required>
         
          <div class="invalid-feedback">Please fill out postal address.</div>
        </div>
  
  
        <div class="form-group form-check">
          <label class="form-check-label">
            @if ($volunteer->ppvolunteer->willingnessToProvide == 1)
              <input class="form-check-input" type="checkbox" name="providingStatus" value=1 checked>
                
            @else
              <input class="form-check-input" type="checkbox" name="providingStatus" value=1 >
            @endif
             I am willing to provide items for prayer.
            <div class="valid-feedback">Thank you.</div>
            <div class="invalid-feedback font-primary">We really would appreciate this!</div>
          </label>
        </div>
        <div class="mx-auto">
          <button type="submit" class="btn-get-started mt-5 ml-auto ">Update</button>
  
        </div>
        
      {!! Form::close() !!}
       </div>
        
    @endif
    
    


</main><!-- End #main -->

    
@endsection