@extends('layouts.app1')
@section('content')
 {{$errors->first()}}
 
    
 
    <main>
     
      <form action="{{route('page.update',$page)}}" method="post">
      <div class="container-fluid p-0">
        <div class="row">
          <div class="col-12 order-1">
            <!--Heading-->
      <div class="container-fluid heading" style="background-color: #000444;">
        
        <div class="container text-light pt-3 ">
          <h6 class="mt-3" style="color: #F2A0CF;">WIN FOUNDATION</h6>
            <div class=" row pb-4 " >
                <div class="col-md-6 col-lg-6 col-xl-6 ">
                    <h2 class="font-weight-bold">
                      
                      {{$page->title}}
                    </h2>
  
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6 ">
                  <p class="text-white-50 font-weight-lighter ">
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
                  </p>
  
  
              </div>
  
            </div>
        </div>
      </div><!--End of Heading-->
      <!--Info-->
      <div class="container">
        <div class="card my-5 p-4 bg-white shadow-lg">
          <div class="card-body text-left ">

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
  
  
  
  </main><!-- End #main -->
    
@endsection