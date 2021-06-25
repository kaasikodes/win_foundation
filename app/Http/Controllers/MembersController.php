<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
use App\Data;

class MembersController extends Controller
{
    public function create()
    {
        return view('members.create');
    }
    public function index()
    {
        
        $members = Person::where('membership','=',1)->orderBy('created_at','desc')->paginate(10);
        return view('members.index')->with('members',$members);
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone' =>'required',
            'location'=>'required'
           
            
        ]);

        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $skills = $request->input('skills');
        $interests = $request->input('interests');
        $occupation = $request->input('occupation');
        $location = $request->input('location');
        $age = $request->input('age');
        

        // checking if person is present-if no, create person
        $person;
        if (Person::all()->where('email','=',$email)->count() > 0) {
            $person = Person::all()->where('email','=',$email)->first();
            //consider redirecting to update and sending info that member info has been updated.
            if ($person->membership == 1) {
                return redirect("/$person->id/member")->with('error',"$person->name, you are already a member of WIN foundation! But you can edit your details by clicking on edit!");

            } else {
                $person->membership = 1;
                $person->save();
            }
            

        }else{
            $person = new Person;
            $person->name = $name;
            $person->email = $email;
            $person->phone = $phone;
            $person->newsletter =  0;
            $person->membership = 1;
            $person->save();

        }
        //saving data for person
        //add a pwd to data so person who is a member will handle editing his/her details
        $data = new Data;
        $data->person_id = $person->id;
        $data->skills = $skills;
        $data->age = $age;
        $data->interests = $interests;
        $data->occupation = $occupation;
        $data->location = $location;
        $data->save();
        return redirect("/$person->id/member")->with('success',"$person->name, you are now a member of WIN foundation!");

    }
    public function edit($id)
    {
        $member = Person::find($id);
        return view('members.edit')->with('member',$member);
    }
    public function update($id,Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone' =>'required',
            'location'=>'required'
           
            
        ]);

        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $skills = $request->input('skills');
        $interests = $request->input('interests');
        $occupation = $request->input('occupation');
        $location = $request->input('location');
        $age = $request->input('age');
        

        
        $person = Person::find($id);
        $person->name = $name;
        $person->email = $email;
        $person->phone = $phone;
        $person->newsletter =  0;
        $person->membership = 1;
        $person->save();

        
        //saving data for person
        //add a pwd to data so person who is a member will handle editing his/her details
        $data = Data::find($person->data->id);
        $data->person_id = $person->id;
        $data->skills = $skills;
        $data->age = $age;
        $data->interests = $interests;
        $data->occupation = $occupation;
        $data->location = $location;
        $data->save();
        return redirect("/$person->id/member")->with('success',"$person->name, your details have been updated!");

    }
    public function show($id)
    {
        $member = Person::find($id);
        return view('members.show')->with('member',$member);
    }

    public function verification(Request $request)
    {
       $this->validate($request, [
          
           'email' => 'required',
          
          
           
       ]);
       $email = $request->input('email');
       if (Person::where('email','=',$email)->first() != null) {
           
           $volunteer = Person::where('email','=',$email)->first();
           return redirect("/$volunteer->id/member");
       }else{
           return redirect('/becomeamember')->with('error','You are not a member, please fill the form below to enroll.');
       }
       
       
       
    }

    
}
