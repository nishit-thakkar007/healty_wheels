<?php

namespace App\Http\Controllers;

use App\Models\signup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\complaints;

class SignUpcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('signup');
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
            'name'=>'required',
            'address'=>'required',
            'email'=>'required|unique:signup,email',
            'pwd'=>['required','min:6,','max:8'],
            'rpwd'=>'required|same:pwd',
        
        ]);
        $signup=new signup;
        $signup->name=$request['name'];
        $signup->address=$request['address'];
        $signup->email=$request['email'];
        $signup->pwd=md5($request['pwd']);
        $signup->save();

        $data=['name'=>"You are signed up in our Health Wheels enjoy "];
        $user['to']=$request['email'];
        Mail::send('mail',$data,function($messages) use($user){
        $messages->to($user['to']);
        $messages->subject('You are successfully signup');
        });
       // return redirect('mail');
       return redirect('/login');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\signup  $signup
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        $allrecords=signup::all();
        $myData=compact('allrecords');
        return view('view')->with($myData);
    }
    public function show(signup $signup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\signup  $signup
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view("login");
    }
    public function loginUser(Request $req)
    {
   
    
        $req->validate([
            'email' => 'required|email',
            'pass' => 'required',
        ]);
       
        $userFound= signup::where(['email'=>$req->email])->first();
        //return $userFound;
        if($userFound)
        {
            
            
             if (md5($req->pass) == $userFound->pwd)
             {
                // return $userFound;
                $req->session()->put('signup', $userFound->id);
                 return redirect('dashboard');
            }
             else
             {
                //dd('hii');
                return "wrong";
             }
   }

    }
    public function dashboard(Request $request)
    {
        //return "<h1 style='color:white;background-color:navy'>Welcome to dashboard</h1>";
        //echo "Hello";
        $myData = array();
         if (Session()->has('signup'))
        {
             $myData = signup::where('id',"=", Session()->get('signup'))->first();            
             
        }
         
        return view('loginhome', compact('myData'));
    }
    public function logout()
    {
        if (Session()->has('signup'))
        {
            Session()->pull('signup');
            return redirect('/');
        }
    }
    
    public function edit($id)
    {
        $rec=signup::where('id',"=",$id)->first();
        return view('update',compact('rec'));
        // $myData=compact('rec');
        // return view('updateform')->with($myData);
    }

    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\signup  $signup
     * @return \Illuminate\Http\Response
     */

    public function update(Request $req)
    {
        $rec=signup::find($req->id);
        $rec->name=$req->name;
        $rec->email=$req->email;
        $rec->save();
        return redirect('view');
    }

    
       /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\signup  $signup
     * @return \Illuminate\Http\Response
     */

     public function mycomp(complaints $comp)
    {
        //return view('productpage');
       $comp=session()->get('comp');
       
        if(!$comp){
        $comp=[
            $comp->id=>[
                'name' =>$comp->name,
                'email'=>$comp->email,
                'vechicle'=>$comp->vechicle
                
            ]
            ];
            session()->put('comp',$comp);
            return redirect('loginhome');
        }

        

        $comp[$comp->id]=[

            'name' =>$comp->name,
            'email'=>$comp->email,
            'vechicle'=>$comp->vechicle
            
        ];
        session()->put('comp',$comp);
        return redirect('loginhome');
    }
     

    

     public function proupdate(Request $req)
     {
         $rec=signup::find($req->id);
         $rec->name=$req->name;
         $rec->email=$req->email;
         $rec->address=$req->address;
         $rec->save();
         return view('myprofile',compact('rec'));
     }
     public function proedit($id)
     {
         $rec=signup::where('id',"=",$id)->first();
         return view('myprofile1',compact('rec'));
         // $myData=compact('rec');
         // return view('updateform')->with($myData);
     }
     public function profile($id)
     {
         $rec=signup::where('id',"=",$id)->first();
         return view('myprofile',compact('rec'));
         // $myData=compact('rec');
         // return view('updateform')->with($myData);
     }
 
    public function myprofile($id)
    {
         $rec=signup::where('id',"=",$id)->first();
         return view('myprofile',compact('rec'));
        // // $myData=compact('rec');
        // return view('updateform')->with($myData);
    }
    

        public function del(Request $req)
        {
            // dd('error');
            $rec=signup::find($req->id)->delete();
            return redirect('view');
        }

        

}

