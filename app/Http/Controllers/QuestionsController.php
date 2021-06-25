<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Answer;
use App\Attempt;
class QuestionsController extends Controller
{
    public function index()
    {
        $questions = Question::orderBy('created_at','desc')->paginate(10);
        return view('tests.mcq', compact('questions'));
    }

    public function start()
    {
        
        return view('tests.start');
    }

    public function verify_pwd(Request $request)
    {
        $data = $request->validate([
            'pwd' => 'required'
        ]);
        if ($data['pwd'] == 'read') {
            $attempt = new Attempt;
            $attempt->section_id = 1;
            $attempt->user_id = auth()->user()->id;
            $attempt->save();

            //create the empty answers t0 be fed to the view based on the questions
            $questions = Question::all();
            // create empty answers
            $answers = [];
            for ($i=0; $i < count($questions) ; $i++) { 
                $data = [
                    'question_id' => $questions[$i]->id,
                    'user_id' => auth()->user()->id,
                    'section_id' => 1      
                    
                ];
                $answers[] = Answer::create($data);
                
            }
            

            // feed the answers to the views
            return redirect('units/1/section');
            









        } else {
            return 'not workks';
        }
        
       
        //return redirect to the question view
    }


    public function activity($id)
    {
        //create the empty answers t0 be fed to the view based on the questions
        $answers = Answer::where('user_id','=',auth()->user()->id)->where('section_id','=',1)->paginate(10);
        $links = Answer::where('user_id','=',auth()->user()->id)->where('section_id','=',1)->get();
        $attempt = Attempt::find(1);
        $duration = $attempt->time_left;
        
        return view('tests.mcq',compact('answers','links','duration'));
    }

    public function store(Request $request)
    {
        
        
        //return $request->input('no_of_answers');
        for ($i=0; $i < $request->input('no_of_answers') ; $i++) { 
            //return 'works';
            $answer = Answer::find($request->input("answer_id_$i"));
            $data = $request->validate([
                
                "answer_$i" => '',
                
                

            ]);
            $data["answer_$i"] = $request->input("answer_$i");
            
            $data = [
                    
                'answer' => $data["answer_$i"]  ,
               
            ];
           
            $answer->update($data);
            
        }
        
        return Answer::all(); 
        
    }


    public function show_single($id,$no)
    {
        $answers = [];
        $answers[0]= Answer::find($id);
        
        return view('tests.single',compact('answers','no'));
    }

    public function time_left($time_left)
    {
        $attempt = Attempt::find(1);
        $attempt->time_left = $time_left;
        $attempt->save();
        return $attempt->time_left;
    }


    
}
