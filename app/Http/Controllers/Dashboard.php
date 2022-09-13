<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Game;
class Dashboard extends Controller
{
    public function index()
    {
      return view('dashboard');
    }

    public function index1()
    {
      $users= User::all();
      // echo "<pre>";
      // print_r($users->toArray());
      $data= compact('users');
      return view('dashboarduser')->with($data);
    }
    public function destory($id)
    {
     $user= User::find($id);
     if(!is_null($user)){
     $user->delete();
     }
     return redirect('dashboarduser');
    }

    public function edit($id)
    {
      $user= User::find($id);
     if(is_null($user)){
     return redirect('dashboarduser');
     }
       $data=compact('user');
      return view('edit')->with($data);
    }

    public function update($id, Request $request)
    {
        // echo "<pre>";
        // print_r($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        $user= User::find($id);
     $user->name = $request['name'];
     $user->email = $request['email'];
    $user->save();
    return redirect('dashboarduser');
  }

  public function index2()
    {
      $games= Game::all();
      // echo "<pre>";
      // print_r($users->toArray());
      $data= compact('games');
      return view('dashboardgame')->with($data);
    }

    public function store(Request $request)
    {
        // echo "<pre>";
        // print_r($request->all());
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'password' => 'required'
        // ]);
        $img = $request->file('image');
        $imgna = $img->getClientOriginalName();
        $img->storeAs('public/imgg',$imgna);
        $url = $request->file('gameurl')->store('url');
     $game= new Game;
     $game->title = $request['title'];
     $game->categories  = $request['cate'];
     $game->type = $request['gametype'];
     $game->image = $imgna;
     $game->url = $url;
     $game->des = $request['descripation'];
      $reg = $game->save();
      if($reg){
        return redirect('dashboardgame');
      }
  }

  public function destorygame($id)
    {
     $game= Game::find($id);
     if(!is_null($game)){
     $game->delete();
     }
     return redirect('dashboardgame');
    }

    public function editgame($id)
    {
      $game= Game::find($id);
     if(is_null($game)){
     return redirect('dashboardgame');
     }
       $data=compact('game');
      return view('editgame')->with($data);
    }

    public function updategame($id, Request $request)
    {
        // echo "<pre>";
        // print_r($request->all());
        $game= Game::find($id);
        $img = $request->file('image');
        $imgna = $img->getClientOriginalName();
        $img->storeAs('public/imgg',$imgna);
        $url = $request->file('gameurl')->store('url');
     $game->title = $request['title'];
     $game->categories  = $request['cate'];
     $game->type = $request['gametype'];
     $game->image = $imgna;
     $game->url = $url;
     $game->des = $request['descripation'];
      $game->save();
    return redirect('dashboardgame');
  } 
}
