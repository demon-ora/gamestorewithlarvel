<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Game;
use Auth;
use Hash;
class Login extends Controller
{
    public function index()
    {
      return view('welcome');
    }

    public function login(Request $request)
    {
        $gu= Game::where('categories','0')->limit(3)->orderby('id','desc')->get();
        $ga= Game::where('categories','1')->limit(3)->orderby('id','desc')->get();
        $da= compact('gu','ga');
        // echo "<pre>";
        // print_r($request->all());
        if($request->email == 'ora@gmail.com' && $request->password == 'ora123'){
            return view('home')->with($da);
        }else{
     $user= User::where('email','=',$request->email)->first();
 
    if($user)
    {
        if(Hash::check($request->password,$user->password)){
         $request->session()->put('userid',$user->id);
         $users= User::all()->count();
         $games= Game::all()->count();
         $data= compact('users','games');
         return view('dashboard')->with($data);
        }
    }
     else 
     {
      return back()->with('error','password or email is wrong');
     }
     return back()->with('errorno','password or email is wrong');}
    }
}
