@extends('layouts.app1')
@section('content')
<main>
    <!--Heading-->
    <div class="container-fluid heading pb-4" style="background-color: #000444;">
        <div class="container text-light pt-3 ">
            <h6 class="mt-3" style="color: #F2A0CF;;">WIN FOUNDATION</h6>
            <div class=" row " >
                
                <div class="col-md-6 col-lg-6 col-xl-6 ">
                    
                    <h1 class="font-weight-bold ">3 Pause & Pray Volunteers</h1>
  
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 ">
                  
                  
  
                  
  
  
              </div>
  
            </div>
        </div>
    </div><!--End of Heading-->
    <div class="container py-4 my-5 ">
        
        @if (isset($volunteers))
        
         @if ($volunteers->count() > 0)
         <div style="width: 90%;" class="mx-auto">
            <table class="table table-striped table-responsive mx-auto">
            <thead>
              <tr>
                <th></th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Willingness to Provide</th>
                <th>Area</th>
                <th>State</th>
                <th>Zonal</th>

              </tr>
            </thead>
            <tbody>
           @foreach ($volunteers as $volunteer)
                @if ($volunteer->ppvolunteer != null)
                <tr>
                    <td>{{$volunteer->created_at->diffForHumans() }}</td>
                    <td>    <a href="{{$volunteer->id}}/ppvolunteer">{{$volunteer->name}}</a>
                    </td>
                    <td>{{$volunteer->email}}</td>
                    <td>{{$volunteer->phone}}</td>
                    <td>
                        @if ($volunteer->ppvolunteer->willingnessToProvide == 1)
                          yes
                            
                        @else
                            no
                        @endif
                    </td>
                    <td>
                        @if ($volunteer->ppvolunteer->areaCoordinator == 1)
                          yes
                            
                        @else
                            no
                        @endif
                    </td>
                    <td>
                        @if ($volunteer->ppvolunteer->stateCoordinator == 1)
                          yes
                            
                        @else
                            no
                        @endif
                    </td>
                    <td>
                        @if ($volunteer->ppvolunteer->zonalCoordinator == 1)
                          yes
                            
                        @else
                            no
                        @endif
                    </td>
                </tr>
                    
                @endif
             
             
               
           @endforeach
            {{$volunteers->links()}}
            </tbody>
         </table>

         </div>
         
        @else
        <p class="py-5 text-center">There are no volunteers</p>
             
         @endif
            
        
            
        @endif
    </div>
</main>
    
@endsection