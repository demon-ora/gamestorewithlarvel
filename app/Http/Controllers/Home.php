<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class Home extends Controller
{
    public function index()
    {
      $games= Game::where('categories','0')->limit(3)->orderby('id','desc')->get();
      $ga= Game::where('categories','1')->limit(3)->orderby('id','desc')->get();
      // echo "<pre>";
      // print_r($games->toArray());
      // die;
      $data= compact('games','ga');
      return view('home')->with($data);
    }

    public function index1()
    {
      $g= Game::where('categories','1')->where('type','action')->get();
      $ga= Game::where('categories','1')->where('type','arcade')->get();
      $gam= Game::where('categories','1')->where('type','adventure')->get();
      $games= Game::where('categories','1')->where('type','sport')->get();
      $ag= Game::where('categories','1')->where('type','puzzel')->get();
      // echo "<pre>";
      // print_r($games->toArray());
      // die;
      $data= compact('games','g','ga','gam','ag');
      return view('modedgame')->with($data);
    }


    public function index2()
    {
      $g= Game::where('categories','0')->where('type','action')->get();
      $ga= Game::where('categories','0')->where('type','arcade')->get();
      $gam= Game::where('categories','0')->where('type','adventure')->get();
      $games= Game::where('categories','0')->where('type','sport')->get();
      $ag= Game::where('categories','0')->where('type','puzzel')->get();
      // echo "<pre>";
      // print_r($games->toArray());
      // die;
      $data= compact('games','g','ga','gam','ag');
      return view('normalgame')->with($data);
    }


}
