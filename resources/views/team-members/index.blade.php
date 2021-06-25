@extends('layouts.app1')
@section('content')
<main>
    <!--Heading-->
    <div class="container-fluid heading pb-4" style="background-color: #000444;">
        <div class="container text-light pt-3 ">
            <h6 class="mt-3" style="color: #F2A0CF;;">WIN FOUNDATION</h6>
            <div class=" row " >
                
                <div class="col-md-6 col-lg-6 col-xl-6 ">
                    
                    <h1 class="font-weight-bold ">Core Members</h1>
  
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 ">
                  
                  
  
                  
  
  
              </div>
  
            </div>
        </div>
    </div><!--End of Heading-->
    <div class="container py-4  ">
        @if (isset($members))
         @if ($members->count() > 0)
           @foreach ($members as $member)
             
             <div class="card p-3 my-4"> 
                
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">

                            <h3 style="color: #000444;" class="pb-0 mb-0">{{$member->name}}</h3>
                            <small>added {{$member->created_at->diffForHumans() }}</small>
    

                        </div>
                        <div class="col-md-5">
                            <div>
                                <button class="btn btn-get-started"><a href="/team-members/{{$member->id}}">View</a></button>
                                {!!Form::open(['action' => ['TeamMembersController@destroy',$member->id],'class'=> 'float-right'])!!}
                                {{Form::hidden('_method','DELETE')}}
                            
                                {{Form::submit('Delete', ['class'=>' btn btn-danger btn-get-started-inverse'])}}
                                {!!Form::close()!!}
                            </div>
                            
                        </div>
                        
                    </div>
                    
                </div>
                    
                    
            
                
                

            </div>
               
           @endforeach
           {{$members->links()}} 
        @else
        <p class="py-5 text-center">There are no members</p>
             
         @endif
            
        
           
        @endif
    </div>
</main>
    
@endsection