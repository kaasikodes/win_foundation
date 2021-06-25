@extends('layouts.app1')
@section('content')
    <main>
        <!--Heading-->
        <div class="container-fluid heading pb-4" style="background-color: #000444;">
            <div class="container text-light pt-3 ">
                <h6 class="mt-3" style="color: #F2A0CF;;">WIN FOUNDATION</h6>
                <div class=" row " >
                    
                    <div class="col-md-6 col-lg-6 col-xl-6 ">
                        
                        <h1 class="font-weight-bold ">Pause & Pray Volunteer</h1>

                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-6 ">
                    
                    <div class="text-md-right">
                        <a href="/ppvolunteers" class="btn-success btn-sm ">Go back</a><!-- This is probably for volunteers who are users-->

                    </div>

                    


                </div>

                </div>
            </div>
        </div><!--End of Heading-->
        
        <div class="container py-4 my-3">
            @if (isset($volunteer))
                <div class="card shadow-sm text-center p-4">
                    <h3 class="pb-4">{{$volunteer->name}}</h3>

                    <div class="contact container">
                        <div class="row" style="justify-content: center;">
                            <div class="col-md-4">
                                <p><strong>Phone - </strong><a href="tel:{{$volunteer->phone}}">{{$volunteer->phone}}</a></p>
                                
                            </div>
                            <div class="col-md-4">
                                <p><strong>Email - </strong><a href="mailto:{{$volunteer->email}}">{{$volunteer->email}}</a></p>
                                
                            </div>
                            <div class="col-md-4">
                                <a href="/{{$volunteer->id}}/edit-ppvolunteer" class="btn-success btn-sm">Edit My Details</a>
                                
                            </div>
                        </div>
                        <hr>
                    </div>

                    <div class="data container card p-2">
                        <div class="row" style="justify-content: center;">
                            <div class="col-md-12">
                                
                                <h6><strong>Fax - </strong>{{$volunteer->data->fax}}</h6>
                                
                            </div>
                            <div class="col-md-12">
                                <h6><strong>Postal Address - </strong>{{$volunteer->data->postalAddress}}</h6>
                                
                            </div>
                            
                            <div class="col-md-12">
                                <h6><span class="mr-4"><strong>Area - </strong>
                                    @if ($volunteer->ppvolunteer->areaCoordinator == 1)
                                    yes
                                        
                                    @else
                                        no
                                    @endif
                                    </span>

                                    <span class="mr-4"><strong>State - </strong>
                                    @if ($volunteer->ppvolunteer->stateCoordinator == 1)
                                    yes
                                        
                                    @else
                                        no
                                    @endif
                                    </span>


                                    <span class="mr-4"><strong>Zonal - </strong>
                                    @if ($volunteer->ppvolunteer->zonalCoordinator == 1)
                                    yes
                                        
                                    @else
                                        no
                                    @endif
                                    </span>
                                
                                </h6>
                                
                            </div>
                            <div class="col-md-12">
                                <h6><strong>Address - </strong>{{$volunteer->data->location}}</h6>
                                
                            </div>
                            <div class="col-md-12">
                                <h6><strong>Willing to provide prayer points - </strong>
                                    @if ($volunteer->ppvolunteer->willingnessToProvide == 1)
                                    yes
                                        
                                    @else
                                        no
                                    @endif
                                
                                </h6>
                                
                            </div>
                        </div>
                    </div>


                </div>
                
            @endif
            
        </div>
    </main>
@endsection