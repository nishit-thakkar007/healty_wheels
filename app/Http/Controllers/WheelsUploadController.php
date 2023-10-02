<?php

namespace App\Http\Controllers;

use App\Models\wheels;
use Illuminate\Http\Request;

class WheelsUploadController extends Controller
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
        $request->validate([
            
            'product'=>'required',
            'price'=>'required',
            'img'=>'required|image|mimes:jpg,png,jpeg,gif|max:2048',
            'desc'=>'required',
            
            
        ]);
        // signup::create($request->all());
        //return redirect()->route('signup1')->with('success','user signed up successfully');
        $file=$request->file('img');
        $extension=$file->getClientOriginalExtension();
        $filename=time().'.'.$extension;
        $file->move('upload/gallery/',$filename);
        $wheels=new wheels;
        $wheels->img=$filename;
        $wheels->path=$file;
        $wheels->product=$request['product'];
        $wheels->price=$request['price'];
        $wheels->desc=$request['desc'];
        $wheels->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\wheels  $wheels
     * @return \Illuminate\Http\Response
     */
    public function show(wheels $wheels)
    {
    
        $allimg=wheels::all();
        $myData=compact('allimg');
        return view('imgview')->with($myData);
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\wheels  $wheels
     * @return \Illuminate\Http\Response
     */
    public function edit(wheels $wheels)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\wheels  $wheels
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, wheels $wheels)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\wheels  $wheels
     * @return \Illuminate\Http\Response
     */
    public function destroy(wheels $wheels)
    {
        //
    }
}
