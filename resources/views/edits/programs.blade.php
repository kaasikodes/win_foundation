@extends('layouts.app1')
@section('content')
<main>
    <!--Heading-->
    
    <form action="{{route('page.update',$page)}}" method="post">
      <div class="container-fluid p-0">
        <div class="row">
          <div class="col-12 order-1">
            <div class="container-fluid heading" style="background-color: #000444;">
      
              <div class="container text-light pt-3 ">
                <h6 class="mt-3" style="color: #F2A0CF;;">WIN FOUNDATION</h6>
                  <div class=" row pb-4 " >
                      <div class="col-md-6 col-lg-6 col-xl-6 ">
                          <h1 class="font-weight-bold">Our Programs</h1>
        
                      </div>
                      <div class="col-md-6 col-lg-6 col-xl-6 ">
                        <div class="text-white-50 font-weight-lighter pt-2">
                          <div class="form-group">
                            <label for="brief_description">Brief Description:</label>
                            <textarea class="form-control" id="brief_description" row="3" placeholder="Enter bio-data" name="brief_description"  required>
                              {!!$page->brief_description!!}
                            </textarea>
                            
                            <div class="invalid-feedback">Please fill out brief description.</div>
                          </div>
                          <script>
                            CKEDITOR.replace('brief_description');
                          </script>
                          
                        </div>
        
        
                    </div>
        
                  </div>
              </div>
            </div><!--End of Heading-->
            <!--Info-->
            @if (isset($pages))
              @for ($i = 0; $i < 4; $i++)
                  <!--First Program-->
            <div class="container py-5 my-3">
                
              <div class="row">
                <div class="col-sm-7 col-lg-7">
                    <h3>{{$pages[$i]->title}}</h3>
                    <div class="">{!!$pages[$i]->brief_description!!}</div>
                    <div class="container pl-0" >
                      <a href="/pastors-appreciation" class="btn-get-started ml-0 ">Read More</a>
        
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
            
            
          </div>
                  
              @endfor
                
            @endif
            @csrf
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
    

   

   
  

  

   





</main><!-- End #main -->
    
@endsection