<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class Regestation extends Controller
{
   public function index()
    {
      return view('regestation');
    }

    public function store(Request $request)
    {
        // echo "<pre>";
        // print_r($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

     $user= new User;
     $user->name = $request['name'];
     $user->email = $request['email'];
     $user->password = Hash::make($request['password']);
      $reg = $user->save();
      if($reg){
        return view('welcome');
      }
  }}
