@extends('layouts.app1')
@section('content')
    <main>
        <!--Heading-->
        <div class="container-fluid heading pb-4" style="background-color: #000444;">
            <div class="container text-light pt-3 ">
                <h6 class="mt-3" style="color: #F2A0CF;;">WIN FOUNDATION</h6>
                <div class=" row " >
                    
                    <div class="col-md-6 col-lg-6 col-xl-6 ">
                        
                        <h1 class="font-weight-bold ">Member</h1>

                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-6 ">
                    
                    <div class="text-md-right">
                        <a href="/members" class="btn-success btn-sm ">Go back</a><!-- This is probably for members who are users-->

                    </div>

                    


                </div>

                </div>
            </div>
        </div><!--End of Heading-->
        
        <div class="container py-4">
            @if (isset($member))
                <div class="card shadow-sm text-center p-4">
                    <h3>{{$member->name}}</h3>

                    <div class="contact container">
                        <div class="row" style="justify-content: center;">
                            <div class="col-md-4">
                                <p><strong>Phone - </strong>{{$member->phone}}</p>
                                
                            </div>
                            <div class="col-md-4">
                                <p><strong>Email - </strong>{{$member->email}}</p>
                                
                            </div>
                            <div class="col-md-4">
                                <a href="/{{$member->id}}/edit" class="btn-success btn-sm">Edit My Details</a>
                                
                            </div>
                        </div>
                        <hr>
                    </div>

                    <div class="data container card p-2">
                        <div class="row" style="justify-content: center;">
                            <div class="col-md-12">
                                
                                <h6><strong>Occupation - </strong>{{$member->data->occupation}}</h6>
                                
                            </div>
                            <div class="col-md-12">
                                <h6><strong>SkillSet - </strong>{{$member->data->skills}}</h6>
                                
                            </div>
                            <div class="col-md-12">
                                <h6><strong>Interests - </strong>{{$member->data->interests}}</h6>
                                
                            </div>
                            <div class="col-md-12">
                                <h6><strong>Age - </strong>{{$member->data->age}}</h6>
                                
                            </div>
                            <div class="col-md-12">
                                <h6><strong>Address - </strong>{{$member->data->location}}</h6>
                                
                            </div>
                        </div>
                    </div>


                </div>
                
            @endif
            
        </div>
    </main>
@endsection