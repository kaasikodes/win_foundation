@extends('layouts.app1')
@section('content')
<main>
  <hr>
  <form action="{{route('page.update',$page)}}" method="post">
    <div class='container-fluid p-0'>
      <div class="row">
        <div class="col-12 order-1">
          <!--Heading-->
    <div class="container-fluid heading pb-4" style="background-color: #000444;">
      <div class="container text-light pt-3 ">
          <h6 class="mt-3" style="color: #F2A0CF;;">WIN FOUNDATION</h6>
          <div class=" row " >
              
              <div class="col-md-6 col-lg-6 col-xl-6 ">
                  
                  <h2 class="font-weight-bold ">{{$page->title}}</h2>

              </div>
              <div class="col-md-6 col-lg-6 col-xl-6 ">
                <p class="text-white-50 font-weight-lighter pt-2">
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
                

                <a href="donate/default/mission-medalist" class="btn-get-started-inverse float-right">Become a Medalist</a>



            </div>

          </div>
      </div>
    </div><!--End of Heading-->
    <!--Info-->
    <div class="container text-center pt-5">
      <div class="">
        <p>
          <div class="form-group">
            <label for="introduction">Introduction:</label>
            <textarea class="form-control" id="introduction" row="1" placeholder="Enter introduction" name="introduction"  required>
              {!!$page->introduction!!}
            </textarea>
            
            <div class="invalid-feedback">Please fill out introduction.</div>
        </div>
          <script>
            CKEDITOR.replace('introduction');
          </script>

        </p>

      </div>
      <div class=" container packages mt-5">
        <div class="row">
          <script>
            let i = 0;
          </script>
          @if ($packages)
           @for ($i = 0; $i < count($packages); $i++)
               <!--First-->
               <div class="col-lg-4 col-md-4">
                <div class="card bg-white shadow-sm">
                  <img src="{{asset('/img/invest.jpg')}}" alt="" class="card-img-top">
                  <div class="card-body">
                    <h4 class="card-title">{{$packages[$i]->title}}</h4>
                    <p class="card-text">
                      <div class="form-group">
                        <label for="package_desciption">Package Description:</label>
                        <textarea class="form-control" id="package_description_{{$i}}" row="3" placeholder="Enter main description" name="package_description_{{$i}}"  required>
                          {!!$packages[$i]->package_description!!}
                        </textarea>
                        
                        <div class="invalid-feedback">Please fill out package description.</div>
                      </div>
                      <script>

                        CKEDITOR.replace('package_description_'+i);
                        i++;
                      </script>
                    </p>
                    <a href="/donate/bronze/mission-medalist" class="btn-get-started">Get Started</a>
                  </div>
                </div>
              </div>
           @endfor
              
          @endif
          
          
          
        </div>
        <!--More Info-->
        <div class="container text-left my-5">
          <p>
            <div class="form-group">
              <label for="main_desciption">Main Description:</label>
              <textarea class="form-control" id="main_description" row="3" placeholder="Enter main description" name="main_description"  required>
                {!!$page->main_description!!}
              </textarea>
              
              <div class="invalid-feedback">Please fill out main description.</div>
          </div>
            <script>
              CKEDITOR.replace('main_description');
            </script>
            
          </p>
          
          
          
          

          
        </div>
        <div class="container mb-5">
          <a href="/donate/default/mission-medalist" class="btn-get-started mx-lg-auto text-center">Become a Medalist</a>
        </div>


      </div>
    </div>

        </div>
        <div class="col-12 order-0">
          @csrf
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