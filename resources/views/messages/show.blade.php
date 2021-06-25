@extends('layouts.app1')
@section('content')
 <!--Heading-->
 <div class="container-fluid heading pb-4" style="background-color: #000444;">
    <div class="container text-light pt-3 ">
        <h6 class="mt-3" style="color: #F2A0CF;;">WIN FOUNDATION</h6>
        <div class=" row " >
            
            <div class="col-md-6 col-lg-6 col-xl-6 ">
                
                <h1 class="font-weight-bold ">Message</h1>

            </div>
            <div class="col-md-6 col-lg-6 col-xl-6 ">
              
              <div class="text-md-right">
                <a href="/messages" class="btn-success btn-sm ">Go back</a>

              </div>

              


          </div>

        </div>
    </div>
</div><!--End of Heading-->
@if (isset($message))
<div class="container my-4">
    <div class="card p-3 my-4"> 
        <div class="card-title">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
    
                       <h3 style="color: #000444;">{{$message->person->name}}</h3>
                       <small>{{$message->created_at->diffForHumans() }}</small>
    
                    </div>
                    <div class="col-md-5">
                       <div class="float-md-right" style="color: #F2A0CF;">
                           <h6><strong>Email:</strong>{{$message->person->email}}</h6>
                           <h6><strong>Phone:</strong>{{$message->person->phone}}</h6>
                        </div>
                        
                    </div>
                </div>
                <hr>
            </div>
            
            
        </div>
        
        <div class="card-body">
            <h5>{{$message->subject}}</h5>
            <p>{{$message->content}}</p>
        </div>
    
    </div>
</div>
    
@endif
    
@endsection