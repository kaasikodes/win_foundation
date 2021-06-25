@extends('layouts.app1')
@section('content')
<div class="container">
  @if (isset($duration))
    <input type="hidden" name="" id="duration" value="{{$duration}}">
      
  @endif
    <div class="row">
        <div class="col-12 col-md-3 bg-white mr-4 mt-4">
            <div class="container p-md-3">
                <div id = "box" class="row  ">
                    @if(isset($links))
                        @for ($i = 1; $i <= count($links); $i++)
                        <div class="col-2 mb-2" style="border-radius: 0; ">
                            <div class="container p-0 text-center">
                                <div class="row justify-content-start ">
                                    <a href="/units/{{$links[$i-1]->id}}/{{$i}}/answer" class="col-12 btn btn-success">{{$i}}</a>
                                    
                                </div>
                            </div>

                        </div>
                          
                        @endfor
                    @endif
                </div>

            </div>
        </div>
        <div  class="col-12 col-md-8  px-5" id="square">
            @if (isset($answers))
            {{$answers->links()}}
                <div class="container float-md-right">
                  Time Left:
                  <p id="timer">
                      <span id="timer-days"></span>
                      <span id="timer-hours"></span>
                      <span id="timer-mins"></span>
                      <span id="timer-secs"></span>
                  </p>
              </div>
              
            <div id="tester">
              <form action="{{route('mcq.store')}}" method="post" id="my_form_id">
            
            
                <?php
                   $startfrom = (($_GET['page']-1) * 10) + 1;
                   if ($_GET['page'] == 1) {
                     $startfrom = 1;
                   }
                
                ?>
                <input type="hidden" name="no_of_answers" id="no_of_answers" value="{{count($answers)}}">
                  @for ($i = 0; $i < count($answers); $i++)
                      
                  
                  <div class="form-group">
                    <label for="">{{$startfrom +$i }}.){{$answers[$i]->question->question}}</label>
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
            </div>
            {{$answers->links()}}
            
                
            @endif
            
        </div>
    </div>
</div>

<script>
  document.getElementById("box").addEventListener('click',showAnswer);
  function showAnswer(e) {
    e.preventDefault();
    let link = e.target;
    if (link.tagName == 'A') {
      console.log(link.getAttribute("href"));
      let url = link.getAttribute("href");
      //make ajax call to handle showing question
      let xhr = new XMLHttpRequest();
      xhr.open('GET',url,true);
      xhr.onload = function () {
        //console.log(this.response);
        document.getElementById("tester").innerHTML = this.response;
        
      };
      xhr.send();
    }
    console.log(e.target.tagName);
    
  }

</script>
<script>
  //for the  pagination form
  document.getElementById("square").addEventListener('click',showAnswers);
  // not needed move on to creating views
</script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    setInterval(function () {
      submitAnswers();
      
    },3000);
    
  });

  //submit Answers function
  function submitAnswers(){
    //e.preventDefault();
    let data = '';
    data+= '_token='+document.getElementById('_token').value + '&';
    data+= 'no_of_answers='+document.getElementById('no_of_answers').value + '&';
    
    for (let i = 0; i < document.getElementById('no_of_answers').value; i++) {
      
      data+=`answer_id_${i}=`+ document.getElementById(`answer_id_${i}`).value + '&';

      //check if a was selected
      if (document.getElementById(`answer_${i}_a`).checked) {
        data+=`answer_${i}=`+ document.getElementById(`answer_${i}_a`).value;
        
      }

      //check if b was selected
      if (document.getElementById(`answer_${i}_b`).checked) {
        data+=`answer_${i}=`+ document.getElementById(`answer_${i}_b`).value;
        
      }

      //check if c was selected
      if (document.getElementById(`answer_${i}_c`).checked) {
        data+=`answer_${i}=`+ document.getElementById(`answer_${i}_c`).value;
        
      }

      //check if d was selected
      if (document.getElementById(`answer_${i}_d`).checked) {
        data+=`answer_${i}=`+ document.getElementById(`answer_${i}_d`).value;
        
      }
      if (!document.getElementById(`answer_${i}_a`).checked  && !document.getElementById(`answer_${i}_b`).checked && !document.getElementById(`answer_${i}_c`).checked && !document.getElementById(`answer_${i}_d`).checked) {
        data+=`answer_${i}=`; 
      }
      
     
      if (i == document.getElementById('no_of_answers').value - 1) {
        continue;
        
      }
      data += '&';
    }

    let xhr =  new XMLHttpRequest();
    xhr.open('POST','/store_answers',true);
    xhr.setRequestHeader('Content-type','application/x-www-form-urlencoded');
    xhr.onload = function() {
      //console.log(this.responseText);
      
      
      
    }

    xhr.send(data);
   

  }
</script>

<script type="text/javascript">
  var endDate = new Date("Jan 1, 2021 12:00:00").getTime();
  var t = document.getElementById('duration').value;
  t= (1*60*1000);


var timer = setInterval(function() {

    let now = new Date().getTime();
    //let t = endDate - now;
    
    t -= 1000;
    
    if (t >= 0) {
    
        let days = Math.floor(t / (1000 * 60 * 60 * 24));
        let hours = Math.floor((t % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        let mins = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
        let secs = Math.floor((t % (1000 * 60)) / 1000);
    
        document.getElementById("timer-days").innerHTML = days +
        "<span class='label'>DAY(S)</span>";
    
        document.getElementById("timer-hours").innerHTML = ("0"+hours).slice(-2) +
        "<span class='label'>HR(S)</span>";
    
        document.getElementById("timer-mins").innerHTML = ("0"+mins).slice(-2) +
        "<span class='label'>MIN(S)</span>";
    
        document.getElementById("timer-secs").innerHTML = ("0"+secs).slice(-2) +
        "<span class='label'>SEC(S)</span>";

        // update in database
        let xhr = new XMLHttpRequest();
        xhr.open('GET',`/time_left/${t}`,true);
        xhr.onload = function () {
          console.log(this.responseText);
          
        };
        xhr.send();
    
    } else {

        document.getElementById("timer").innerHTML = "The countdown is over!";
        document.getElementById("my_form_id").submit();
        
    
    }
    
}, 1000);

//timer();
</script>



    
@endsection
