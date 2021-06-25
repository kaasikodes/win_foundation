@extends('layouts.app1')
@section('content')
<main>
    <!--Heading-->
    <div class="container-fluid heading pb-4" style="background-color: #000444;">
        <div class="container text-light pt-3 ">
            <h6 class="mt-3" style="color: #F2A0CF;;">WIN FOUNDATION</h6>
            <div class=" row " >
                
                <div class="col-md-6 col-lg-6 col-xl-6 ">
                    
                    <h1 class="font-weight-bold ">Messages</h1>
  
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 ">
                  
                  
  
                  
  
  
              </div>
  
            </div>
        </div>
    </div><!--End of Heading-->
    <div class="container py-4  ">
        @if (isset($messages))
         @if ($messages->count() > 0)
           @foreach ($messages as $message)
             
             <div class="card p-3 my-4"> 
                
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">

                            <h3 style="color: #000444;" class="pb-0 mb-0">{{$message->person->name}}</h3>
                            <small>{{$message->created_at->diffForHumans() }}</small>
    

                        </div>
                        <div class="col-md-5">
                            <div class="text-md-right mr-auto">
                                <a href="/{{$message->id}}/show" class=" btn-get-started ml-0" style='font-size:1rem;'>Read</a>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
                    
                    
            
                
                

            </div>
               
           @endforeach
        @else
        <p class="py-5 text-center">There are no messages</p>
             
         @endif
            
        
            
        @endif
    </div>
</main>
    
@endsection