@extends('layouts.app1')
@section('content')
<main>
    <!--Heading-->
    
    @if (isset($page))
    <hr>
    <form action="{{route('page.update',$page)}}" method="post">
      <div class="container-fluid p-0">
        <div class="row">
          <div class="col-12 order-1">
            <div class="container-fluid heading pb-4" style="background-color: #000444;">
              <div class="container text-light text-center   pt-3 ">
                  <h6 class="mt-3 " style="color: #F2A0CF;;">WIN FOUNDATION</h6>
                  <h2 class="font-weight-bold ">{{$page->title}}</h2>
                  
                  
              </div>
            </div><!--End of Heading-->
            @include('inc.messages')
             <!--Info-->
              <!--pic side-->
            <div class="container py-5 my-3">
                <div class="row">
                    <div class="col-sm-7 col-lg-7">
                        <p class="">
                            <div class="form-group">
                              <label for="brief_desciption">Brief Description:</label>
                              <textarea class="form-control" id="brief_description" row="3" placeholder="Enter bio-data" name="brief_description"  required>
                                {!!$page->brief_description!!}
                              </textarea>
                              
                              <div class="invalid-feedback">Please fill out brief description.</div>
                            </div>
                            <script>
                              CKEDITOR.replace('brief_description');
                            </script>
                        </p>
                        <div class="container pl-0" >
                          <a href="/becomeamember" class="btn-get-started ml-0 ">Become a Member</a>
        
                        </div>
                      
                    </div>
                    <div class="col-sm-5 col-lg-5">
                      <div class="container pl-0" >
                          <div style="width:52vmin; " class="ml-lg-auto ml-md-auto ">
                              <img src="{{asset('/img/invest.jpg')}}" alt="" class="img-fluid ">
        
                          </div>
                         
                      </div>
        
                    </div>
                </div>
            </div> <!--end of pic side-->
            <div class="container-fluid"><hr></div>
            <div class="container pb-5">
                
        
                <div class="row">
        
                  <div class="col-md-12 col-lg-12 text-center" >
                    <div class="card my-5 p-4 bg-white shadow-lg">
                      <div class="card-body text-left ">
                        <p class="pt-4">
                          <div class="form-group">
                            <label for="main_desciption">Main Description:</label>
                            <textarea class="form-control" id="main_description" row="3" placeholder="Enter bio-data" name="main_description" required>
                              {!!$page->main_description!!}
                            </textarea>
                            
                            <div class="invalid-feedback">Please fill out main description.</div>
                          </div>
                          <script>
                            CKEDITOR.replace('main_description');
                          </script>
                          @csrf
                        </p>
              
                        
                        
              
                        
              
                          
                      </div>
                    </div>
          
                  </div>
        
                  <div class="col-md-12 col-lg-12 text-center" >
                    <a href="/becomeamember" class=" btn-get-started  my-5" style="font-size:1.3rem;">Join Now</a>
          
                  </div>
        
                </div>
              
            </div>
          </div>
          <div class="col-12 order-0">
            @if (!Auth::guest())
              @if (Auth::user()->id == 1)
              <hr>
              <div class="container card p-3 mt-4">
                <div class="row">
                  <div class="col-7"> 
                    <p class="text-muted">Click the save button to save your content</p>
                  </div>
                  <div class="col-5 ">
                    @if ($page)
                    <div class="container text-align-center bg-danger">

                      @method('PUT')
                      <button type="submit" class="btn btn-primary float-right">Save</button>
                        
                      
                    </div>
                    
                        
                    @endif
                    
                  </div>
                </div>
              </div>
              @endif
                  
          @endif
          </div>
        </div>
      
      
      </div>

    </form>
    
    
    
     
        
    @endif
   
    
</main><!-- End #main -->
    
@endsection