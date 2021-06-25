@if (!Auth::guest())
    @if (Auth::user()->id == 1)
    <div class="container card p-3">
      <div class="row">
        <div class="col-7"> 
          <p class="text-muted">Click the edit button to edit your content</p>
        </div>
        <div class="col-5 ">
          @if ($page)
          <div class="container text-align-center bg-danger">
              
            <a href="{{url("/$page->id/page")}}" class="btn btn-primary float-right">Edit</a>

          </div>
          
              
          @endif
          
        </div>
      </div>
    </div>
    @endif
        
    @endif