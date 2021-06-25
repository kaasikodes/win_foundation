@extends('layouts.app1')
@section('content')
{{$errors->first()}}
<main>
    <!--Heading-->
    <hr>
    <form action="{{route('page.update',$page)}}" method="post">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-12 order-1">
                    <div class="container-fluid heading pb-4" ">
                        <div class="container  pt-3 ">
                            <h6 class="mt-3" style="color: #F2A0CF;">WIN FOUNDATION</h6>
                            <div class=" row " >
                                
                                <div class="col-md-6 col-lg-6 col-xl-6 ">
                                    
                                    <h1 class="font-weight-bold " style="color: #000444; margin-top: -14px;">CALL TO INVEST</h1>
                                    <p class="text-black-50 pt-2">
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
                                    </p>
                  
                                    <a href="pa.html" class="btn-get-started float-left ml-auto mt-3">Invest Now</a>
                                    
                  
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-6 ">
                                    <div class="container pl-0" >
                                        <div style="width:67vmin; " class="ml-lg-auto ml-md-auto ">
                                            <img src="{{asset('/img/invest.jpg')}}" alt="" class="img-fluid ">
                  
                                        </div>
                                       
                                    </div>
                                  
                  
                                  
                  
                  
                  
                              </div>
                  
                            </div>
                        </div>
                      </div><!--End of Heading-->
                      <!--Info-->
                      <!--Secondary Heading-->
                      <div class="container-fluid heading my-4" style="background-color: #000444;">
                        <div class="container text-light py-4 ">
                            
                            <div class=" row " >
                                
                                <div class="col-md-6 col-lg-6 col-xl-6 ">
                                    
                                    <h2 class="font-weight-bold ">Investment Portfolio</h2>
                  
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
                                  
                  
                                  
                  
                  
                              </div>
                  
                            </div>
                        </div>
                      </div><!--End of Secondary Heading-->
                       <!-- ======= About Lists Section ======= -->
                        <section class="about-lists mb-5">
                            <div class="container">
                                @if (isset($budgets))
                                <div class="row no-gutters">
                                    @for ($i = 0 ; $i < count($budgets); $i++)
                                    <div class="col-lg-6 col-md-6 content-item" data-aos="fade-up">
                                        <h4>{{$budgets[$i]->page->title}}</h4>
                                        <span><strong>Budget - </strong>
                                            <div class="form-group">
                                                <label for="amount">Amount:</label>
                                                <input type="number" name="amount_{{$i}}" id="" value="{{$budgets[$i]->amount}}">
                                                
                                                <div class="invalid-feedback">Please fill out amount.</div>
                                              </div>
                                        
                                        
                                        </span>
                                        <p class="pt-1 pb-3">{!!$budgets[$i]->page->brief_description!!}</p>
                                        <div class="container pl-0 mt-4" >
                                            <a href="/donate/pastors-appreciation" class="btn-get-started ml-0 ">Fund</a>
                      
                                        </div>
                                    
                                    
                                    
                                    </div>
                                        
                                    @endfor
                  
                                    
                                    
                      
                                </div>
                                    
                                @endif
                  
                            
                            
                  
                            </div>
                        </section><!-- End About Lists Section -->
                  
                      <!--end of info-->
                </div>
                @csrf
                <div class="col-12 order-0">
                    @if (!Auth::guest())
                    @if (Auth::user()->id == 1)
                    
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
                <hr>
                </div>
            </div>
        </div>
    </form>
    
   
   

</main><!-- End #main -->
  

    
@endsection