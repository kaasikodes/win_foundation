<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;

class TeamMembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::orderBy('created_at','desc')->paginate(10);
        return view('team-members.index',compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return 'created';
        return view('team-members.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'=> 'required',
            'email' => 'required',
            'phone'=> 'required',
            'role'=> 'required',
            'whatsapp'=>'',
            'bio_data'=>'',
            'category' =>'required'

        ]);
        Member::create($data);
        return redirect('team-members');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $member = Member::find($id);
        return view('team-members.show',compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $member = Member::find($id);
        
        return view('team-members.edit',compact('member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $member = Member::find($id);
        $data = $request->validate([
            'name'=> 'required',
            'email' => 'required',
            'phone'=> 'required',
            'role'=> 'required',
            'whatsapp'=>'',
            'bio_data'=>'',
            'category' =>'required'

        ]);
        $member->update($data);
        return redirect('team-members');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $member = Member::find($id);
        $member->delete();
        return back();
    }
}
