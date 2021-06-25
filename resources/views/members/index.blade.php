@extends('layouts.app1')
@section('content')
<main>
    <!--Heading-->
    <div class="container-fluid heading pb-4" style="background-color: #000444;">
        <div class="container text-light pt-3 ">
            <h6 class="mt-3" style="color: #F2A0CF;;">WIN FOUNDATION</h6>
            <div class=" row " >
                
                <div class="col-md-6 col-lg-6 col-xl-6 ">
                    
                    <h1 class="font-weight-bold ">Members</h1>
  
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 ">
                  
                  
  
                  
  
  
              </div>
  
            </div>
        </div>
    </div><!--End of Heading-->
    <div class="container py-4 my-5 ">
        
        @if (isset($members))
        
         @if ($members->count() > 0)
         <div style="width: 90%;" class="mx-auto">
            <table class="table table-striped table-responsive mx-auto">
            <thead>
              <tr>
                <th></th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Gender</th>
                <th>Age</th>
                <th>Occuption</th>
                <th>Skills</th>

              </tr>
            </thead>
            <tbody>
           @foreach ($members as $member)
                <tr>
                    <td>{{$member->created_at->diffForHumans() }}</td>
                    <td> <a href="/{{$member->id}}/member">{{$member->name}}</a>
                    </td>
                    <td>{{$member->email}}</td>
                    <td>{{$member->phone}}</td>
                    <td>Male</td><!--add to form and table-data-->
                    <td>{{$member->data->age}}</td>
                    <td>{{$member->data->occupation}}</td>
                    <td>{{$member->data->skills}}</td>
                </tr>
             
             
               
           @endforeach
            {{$members->links()}}
            </tbody>
         </table>

         </div>
         
        @else
        <p class="py-5 text-center">There are no members</p>
             
         @endif
            
        
            
        @endif
    </div>
</main>
    
@endsection