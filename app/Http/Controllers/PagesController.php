<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

use App\Package;
use App\Budget;
use App\Aspect;
use App\Member;
use App\Extra;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id = 11)
    {
        //return 'works';
        $page = Page::find($id);
        $packages = Package::all();
        $budgets = Budget::all();
        $aspects = Aspect::all();
        if ($page->title == 'Mission Medalist') {
            return view('pages.mission-medalist',compact('page','packages'));
        }
        if ($page->title == 'Membership') {
            return view('pages.membership',compact('page'));
        }
        if ($page->title == 'Donations') {
            
            //return 'works';
            return view('pages.donate',compact('page','budgets'));
        }
        if ($page->title == 'Statements') {
            
            //return 'works';
            return view('pages.statements',compact('page'));
        }
        if ($page->id == 7) {
            
            //return 'works';
            $pages = Page::all();
            return view('pages.programs',compact('page','pages'));
        }
        if ($page->id == 9) {
            
            //return 'works';
            return view('pages.mission',compact('page','aspects'));
        }
        if ($page->id == 10) {
            
            //return 'works';
            //dd($page);
            $management = Member::where('category','=','Management Team')->get();
            //return $management;
            $secondary_team = Member::where('category','=','Secondary Team')->get();
            return view('pages.members',compact('page','management','secondary_team'));
        }
        if ($page->id == 11) {
            
            return view('home1',compact('page'));
        }
        return view('pages.common_page',compact('page'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id = 11)
    {
        $page = Page::find($id);
        $packages = Package::all();
        $budgets = Budget::all();
        $aspects = Aspect::all();
        if ($page->title == 'Mission Medalist') {
            return view('edits.mission-medalist',compact('page','packages'));
        }
        if ($page->title == 'Membership') {
            return view('edits.membership',compact('page'));
        }
        if ($page->title == 'Donations') {
            return view('edits.donate',compact('page','budgets'));
        }
        if ($page->title == 'Statements') {
            
            //return 'works';
            return view('edits.statements',compact('page'));
        }
        if ($page->id == 7) {
            
            //return 'works';
            $pages = Page::all();
            return view('edits.programs',compact('page','pages'));
        }
        if ($page->id == 9) {
            
            //return 'works';
            return view('edits.mission',compact('page','aspects'));
        }
        if ($page->id == 10) {
            
            //return 'works';
            //dd($page);
            $management = Member::where('category','=','Management Team')->get();
            //return $management;
            $secondary_team = Member::where('category','=','Secondary Team')->get();
            return view('edits.members',compact('page','management','secondary_team'));
        }
        if ($page->id == 11) {
            
            return view('edits.home1',compact('page'));
        }
        return view('edits.common_page',compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Page $page, Request $request)
    {
        
        
        $data = $request->validate([
            'title' => '',
            'brief_description' => '',
            'main_description' => '',
            'introduction' => ''
        ]);
        $page->update($data);
        if ($page->title == 'Mission Medalist') {
            $packages = Package::all();
            for ($i=0; $i <count($packages) ; $i++) { 
                $data = $request->validate([
                    'title' => '',
                    'package_description_'.$i => 'required',
                    
                ]);

                $packages[$i]->package_description = $data["package_description_$i"];
                $packages[$i]->save();
            }
            
        }

        if ($page->title == 'Donations') {
            $budgets = Budget::all();
            for ($i=0; $i <count($budgets) ; $i++) { 
                $data = $request->validate([
                    
                    'amount_'.$i => 'required',
                    
                ]);

                $budgets[$i]->amount = $data["amount_$i"];
                $budgets[$i]->save();
            }
            
        }

        if ($page->id == 9) {
            $aspects = Aspect::all();
            for ($i=0; $i <count($aspects) ; $i++) { 
                $data = $request->validate([
                    
                    'title_'.$i => 'required',
                    'description_'.$i => 'required',
                    
                ]);

                $aspects[$i]->title = $data["title_$i"];
                $aspects[$i]->description = $data["description_$i"];
                $aspects[$i]->save();
            }
            
        }

        if ($page->id == 11) {
            $extra = Extra::find($page->extra->id);
            
            $data = $request->validate([
                    
                'welcome'=>'required',

                'name1'=>'required',
                'role1'=>'required',

                'name2'=>'required',
                'role2'=>'required',

                'name3'=>'required',
                'role3'=>'required',

                'name4'=>'required',
                'role4'=>'required',

                'name5'=>'required',
                'role5'=>'required',

                'name6'=>'required',
                'role6'=>'required',

                'fund'=>'required',

                'q1'=>'required',
                'q2'=>'required',
                'q3'=>'required',
                'q4'=>'required',
                'q5'=>'required',
                'q6'=>'required',

                'vision'=>'',
                'mission'=>'',
                'values'=>'',
                
            ]);
            $extra->update($data);

        }


        
        
        return redirect("$page->id/pause-and-pray");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
