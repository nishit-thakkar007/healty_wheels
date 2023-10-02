<?php

namespace App\Http\Controllers;

use App\Models\complaints;
use Illuminate\Http\Request;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Mail;
use App\Models\signup;

class ComplaintsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('complaints');
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
    public function storecomplaints(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'vechicle'=>'required',
            'desc'=>'required',
            //'satus'=>'required',
        
        ]);
        $complaints=new complaints;
        $complaints->userid=$request->session()->get('signup');
        $complaints->name=$request['name'];
        $complaints->email=$request['email'];
        $complaints->vechicle=$request['vechicle'];
        $complaints->desc=$request['desc'];
       // $complaints->rpwd=$request['satus'];
       //$request->session()->put('session_email',$request['email']);
        $complaints->save();
        $data=['name'=>"You are signed up in our Health Wheels enjoy "];
        $user['to']=$request['email'];
        Mail::send('mail',$data,function($messages) use($user){
        $messages->to($user['to']);
        $messages->subject('You are successfully signup');
        });
        return redirect('/complaints');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\complaints  $complaints
     * @return \Illuminate\Http\Response
     */
    public function comview()
    {
        $data =signup::select('signup.*','complaints.*')
        ->join('complaints','complaints.userid','=','signup.id')
        ->get();
              return view('viewcomplain',compact('data'));
    }
 

    public function show(complaints $complaints)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\complaints  $complaints
     * @return \Illuminate\Http\Response
     */
    public function edit(complaints $complaints)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\complaints  $complaints
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, complaints $complaints)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\complaints  $complaints
     * @return \Illuminate\Http\Response
     */
    public function destroy(complaints $complaints)
    {
        //
    }
}
