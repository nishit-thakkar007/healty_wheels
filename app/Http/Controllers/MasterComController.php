<?php

namespace App\Http\Controllers;

use App\Models\mastercom;
use Illuminate\Http\Request;

class MasterComController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mastercom');
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
    public function store1(Request $request)
    {
        $request->validate([
            'name'=>'required',
        ]);
        $com=new mastercom;
        $com->name=$request['name'];
        $com->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\mastercom  $mastercom
     * @return \Illuminate\Http\Response
     */
    public function show(mastercom $mastercom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mastercom  $mastercom
     * @return \Illuminate\Http\Response
     */
    public function edit(mastercom $mastercom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\mastercom  $mastercom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mastercom $mastercom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mastercom  $mastercom
     * @return \Illuminate\Http\Response
     */
    public function destroy(mastercom $mastercom)
    {
        //
    }
}
