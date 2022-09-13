<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
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
        // echo "<pre>";
        // print_r($request->all());

     $user= User::where('email','=',$request->email)->first();
 
    if($user)
    {
        if(Hash::check($request->password,$user->password)){
         $request->session()->put('$userid',$user->id);
         return view('dashboard');
     }}
     else 
     {
       echo "login fail";
     }

    }
}
