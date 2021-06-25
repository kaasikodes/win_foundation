@extends('layouts.app1')
@section('content')
{{$errors->first()}}
<main>
  <form action="{{route('page.update',$page)}}" method="post">
    <div class="container-fluid p-0">
      <div class="row">
        <div class="col-12 order-1">
          <!--Heading-->
            <div class="container-fluid heading pb-4" style="background-color: #000444;">
              <div class="container text-light text-center   pt-3 ">
                  <h6 class="mt-3 " style="color: #F2A0CF;;">WIN FOUNDATION</h6>
                  <h2 class="font-weight-bold ">Our Mission, Commission, or Command</h2>
                  <div class="text-white-50">
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
            </div><!--End of Heading-->
            <!--info-->
            <div class="container my-5 text-center">
              <div class="row">
                  <!--First-->
                  <script>
                    let i = 0;
                  </script>
                  @if (isset($aspects))
                      @for ($i = 0; $i < count($aspects); $i++)
                        <div class="col-lg-12 col-md-12">
                          <div class="card bg-white shadow-sm my-4 pb-5">
                            <img src="{{asset('/img/evangelize.jpg')}}" alt="" class="card-img-top">
                            <div class="card-body">
                              <h4 class="card-title font-weight-bold" style="color: #000444;">
                                
                                <div class="form-group">
                                  <label for="title_{{$i}}">Title here: </label>
                                  <input type="text" name="title_{{$i}}" id="" value="{!!$aspects[$i]->title!!}" class="form-control" required>
                                </div>
                              </h4>
                              <p class="card-text">
                                
                                <div class="form-group">
                                  <label for="description">Description:</label>
                                  <textarea class="form-control" id="description_{{$i}}" row="3" placeholder="Enter description" name="description_{{$i}}"  required>
                                    {{$aspects[$i]->description}}
                                  </textarea>
                                  
                                  <div class="invalid-feedback">Please fill out brief description.</div>
                                </div>
                                <script>
                                  CKEDITOR.replace('description_'+i);
                                  i++;
                                </script>
                              </p>
                              
                      
                            </div>
                          </div>
                        </div>
                        @csrf
                          
                      @endfor
                      
                  @endif
                  

                  

                  
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