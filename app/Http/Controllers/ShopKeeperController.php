<?php

namespace App\Http\Controllers;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Mail;
use App\Models\shopKeeper;

use Illuminate\Http\Request;

class ShopKeeperController extends Controller
{
    public function index()
    {
        return view('shopeup');
    }
    public function storedata(Request $req)
    {
        $req->validate([
            'name'=>'required',
            'email'=>'required|unique:signup,email',
            'store'=>'required',
            'address'=>'required',
            'pin'=>'required',
            'pwd'=>['required','min:6,','max:8'],
            'rpwd'=>'required|same:pwd',
            
        ]);
        
        $shopkeeper=new shopkeeper;
        $shopkeeper->name=$req['name'];
        $shopkeeper->email=$req['email'];
        $shopkeeper->store=$req['store'];
        $shopkeeper->address=$req['address'];
        $shopkeeper->pin=$req['pin'];
        $shopkeeper->pwd=md5($req['pwd']);
        $shopkeeper->save();

        $data=['name'=>"You are signed up in our Health Wheels enjoy "];
        $user['to']=$req['email'];
        Mail::send('mail',$data,function($messages) use($user){
        $messages->to($user['to']);
        $messages->subject('You are successfully signup');
        });
        return redirect('/shoplogin');
        
    }

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
       
        $userFound= shopkeeper::where(['email'=>$req->email])->first();
        //return $userFound;
       if($userFound)
        {
            
            
             if (md5($req->pass) == $userFound->pwd)
             {
                // return $userFound;
                $req->session()->put('shopkeeeper', $userFound->id);
                 return redirect('shopdashboard');
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
        $myData = array();
        if (Session()->has('shopkeeeper'))
        {
            $myData = shopkeeper::where('id',"=", Session()->get('shopkeeeper'))->first();            
        }
         return view('shopkeeperlogin', compact('myData'));
    }
    public function logout()
    {
        if (Session()->has('shopkeeeper'))
        {
            Session()->pull('shopkeeeper');
            return redirect('/');
        }
    }
    

    public function view1()
    {
        $allrecords= shopkeeper::all();
        $myData=compact('allrecords');
        return view('view1')->with($myData);
    }


    public function update(Request $req)
    {
        $rec=shopkeeper::find($req->id);
        $rec->name=$req->name;
        $rec->email=$req->email;
        $rec->save();
        return redirect('view1');
    }

    public function edit($id)
    {
        $rec=shopkeeper::where('id',"=",$id)->first();
        return view('shopupdate',compact('rec'));
        // $myData=compact('rec');
        // return view('updateform')->with($myData);
    }

    public function del(Request $req)
    {
        // dd('error');
        $rec=shopkeeper::find($req->id)->delete();
        return redirect('view1');
    }

    // public function comview()
    // {
    //     $data =signup::select('signup.*','shopkeeeper.*','complaints.*')
    //     ->join('complaints','complaints.shopid','=','shopkeeeper.id')
    //     ->join('complaints','complaints.userid','=','signup.id')
    //     ->get();
    //           return view('viewcomplain',compact('data'));
    // }

    
}
