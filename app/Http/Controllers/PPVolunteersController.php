<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
use App\Data;
use App\PPVolunteer;

class PPVolunteersController extends Controller
{
    public function create()
    {
        return view('ppvolunteers.create');
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
        $providingStatus = $request->input('providingStatus');
        $area = $request->input('area');
        $state = $request->input('state');
        $zonal = $request->input('zonal');
        $postal = $request->input('postal-address');
        $fax = $request->input('fax');
        $location = $request->input('location');
        //return $postal;
        
        

        // checking if person is present-if no, create person
        $person;
        $data;
        if (Person::all()->where('email','=',$email)->count() > 0) {
            $person = Person::all()->where('email','=',$email)->first();
            $person->phone = $phone;
            $person->save();
            //consider redirecting to update and sending info that member info has been updated.
            if ($person->data != null) {
                $data = Data::where('person_id','=',$person->id)->first();
                $data->postalAddress = $postal;
                $data->fax =$fax;
                $data->save();
            } else{
                $data = new Data;
                $data->person_id = $person->id;
               
                
                
                $data->location = $location;
                $data->postalAddress = $postal;
                $data->fax =$fax;
                $data->save();
            }
        }else{
            
            $person = new Person;
            $person->name = $name;
            $person->email = $email;
            $person->phone = $phone;
            $person->newsletter =  0;
            $person->membership = 0;
            $person->save();

            $data = new Data;
            $data->person_id = $person->id;
           
           
            $data->location = $location;
            $data->postalAddress = $postal;
            $data->fax =$fax;
            $data->save();

        }
        $ppvolunteer;

        if ($person->ppvolunteer != null) {
            $ppvolunteer = PPVolunteer::where('person_id','=',$person->id)->first();
            //return 'here';
            
        }else{
            $ppvolunteer = new PPVolunteer;
            $ppvolunteer->person_id = $person->id;


        }
        //return $ppvolunteer;
        
        $ppvolunteer->willingnessToProvide = !empty($providingStatus);
        $ppvolunteer->areaCoordinator = !empty($area);
        $ppvolunteer->stateCoordinator = !empty($state);
        $ppvolunteer->zonalCoordinator = !empty($zonal);
        $ppvolunteer->save();
        return redirect("/$person->id/ppvolunteer");
        
    }

     public function show($id)
     {
         
        $volunteer = Person::find($id);
         return view('ppvolunteers.show')->with('volunteer',$volunteer);
     }

     public function edit($id)
     {
        $volunteer = Person::find($id);
        return view('ppvolunteers.edit')->with('volunteer',$volunteer);
     }

     public function index()
     {
        $volunteers = Person::orderBy('created_at','desc')->paginate(10);
        
        return view('ppvolunteers.index')->with('volunteers',$volunteers);
     }

     public function verification(Request $request)
     {
        $this->validate($request, [
           
            'email' => 'required',
           
           
            
        ]);
        $email = $request->input('email');
        if (Person::where('email','=',$email)->first() != null) {
            
            $volunteer = Person::where('email','=',$email)->first();
            return redirect("/$volunteer->id/ppvolunteer");
        }else{
            return redirect('/be-a-prayer-warrior')->with('error','You are not a part of this program, please fill the form below to enroll.');
        }
        
        
        
     }

     
}
