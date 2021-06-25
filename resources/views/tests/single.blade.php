
@if (isset($answers))
            <form action="{{route('mcq.store')}}" method="post" id="test-form">
            
            
            <?php
               if (isset($_GET['page'])) {
                    $startfrom = (($_GET['page']-1) * 10) + 1;
                    if ($_GET['page'] == 1 ) {
                        $startfrom = 1;
                    }

               } else {
                   $startfrom = 1;
               }
               
            
            ?>
            <input type="hidden" name="no_of_answers" id="no_of_answers" value="{{count($answers)}}">
              @for ($i = 0; $i < count($answers); $i++)
                  
              
              <div class="form-group">
                <label for="">{{$no }}.){{$answers[$i]->question->question}}</label>
                <input type="hidden" name="question_id_{{$i}}" id="question_id_{{$i}}" value="{{$answers[$i]->question_id}}">
                <input type="hidden" name="answer_id_{{$i}}" id="answer_id_{{$i}}" value="{{$answers[$i]->id}}">

                <div class="radio">
                    <label><input type="radio" name="answer_{{$i}}" id="answer_{{$i}}_a" value="a" {{$answers[$i]->answer == 'a' ? 'checked' : ''}}>{{$answers[$i]->question->option_a}}</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="answer_{{$i}}" id="answer_{{$i}}_b" value="b" {{$answers[$i]->answer == 'b' ? 'checked' : ''}}>{{$answers[$i]->question->option_b}}</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="answer_{{$i}}" id="answer_{{$i}}_c" value="c" {{$answers[$i]->answer == 'c' ? 'checked' : ''}}>{{$answers[$i]->question->option_c}}</label>
                  </div> 
                  <div class="radio">
                    <label><input type="radio" name="answer_{{$i}}" id="answer_{{$i}}_d" value="d" {{$answers[$i]->answer == 'd' ? 'checked' : ''}}>{{$answers[$i]->question->option_d}}</label>
                  </div> 

                
             </div>
                  
              @endfor
              <input type="hidden" name="_token"  id="_token" value="{{ csrf_token() }}"> 
              
              <input type="submit" value="Save All" class="btn btn-primary float-right" id="save">
            </form>
                
            @endif
  
    
