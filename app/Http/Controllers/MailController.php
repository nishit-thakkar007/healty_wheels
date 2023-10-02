<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\complaints;

class MailController extends Controller
{
    public function index()
    {
        //  echo "hello";
        $data=['name'=>"You are signed up in our Health Wheels enjoy "];
        $user['to']='thakkarnishit0@gmail.com';
        Mail::send('mail',$data,function($messages) use($user){
        $messages->to($user['to']);
        $messages->subject('You are successfully signup');
        });
        return redirect('/signup');
    }



 public function updateids(Request $req)
 {

    // echo "<h1><pre>";
    // print_r($req->toArray());
    //Post::where('id',3)->update(['title'=>'Updated title']);
    complaints::where('id',$req->custid)->update(['shopid'=>$req->shopid]);
    echo "done";    
 }





//     public function krisha()
//     {
//         //$x=new complaints;
//         //Post::where('id',3)->update(['title'=>'Updated title']);
//         //$i=session()->get('shopkeeeper');
//         //complaints::where('id',$i)->update(['shopid'=>]);
//         $data=['name'=>"You are signed up in our Health Wheels enjoy "];
//         $user['to']='thakkarnishit0@gmail.com';
//         Mail::send('mail',$data,function($messages) use($user){
//         $messages->to($user['to']);
//         $messages->subject('You are successfully signup');
//         });
//         return redirect('/signup');
//     }
 }
