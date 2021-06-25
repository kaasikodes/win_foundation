<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
use App\Message;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class MessagesController extends Controller
{
    public function index()
    {
        $messages = Message::orderBy('created_at','desc')->paginate(10);
        return view('messages.index')->with('messages',$messages);
    }

    public function store(Request $request)
    {
        //return 'it is';
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'message' =>'required'
           
            
        ]);
        $name = $request->input('name');
        $email = $request->input('email');
        $subject = $request->input('subject');
        $content = $request->input('message');
        
        $newsletter = $request->input('newsletter');

        // checking if person is present-if no, create person
        $person;
        if (Person::all()->where('email','=',$email)->count() > 0) {
            $person = Person::all()->where('email','=',$email)->first();
        }else{
            $person = new Person;
            $person->name = $name;
            $person->email = $email;
            $person->newsletter =  0;
            $person->membership = 0;
            $person->save();

        }

        // Saving the message of the person
        //return $person->id;
        $message = new Message;
        $message->person_id = $person->id;
        $message->subject = $subject;
        $message->content = $content;
        $message->save();
        
        //Send Message to his email
        //Mail::to($message->person->email)->send(new ContactMail($message));
       
        //return new ContactMail($message);

        
        
        

        if($request->input('home') ==  1){
            return 'Thank you '.$name.', for writing us!';
        }
        return 'Thank you '.$name.', for writing us!';
        //return view('pages.contact')->with('success','Thank you '.$name.', for writing us!');
    }

    public function show($id)
    {
        $message = Message::find($id);
        return view('messages.show')->with('message',$message);
    }
}
