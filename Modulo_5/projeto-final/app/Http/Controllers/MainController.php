<?php

namespace App\Http\Controllers;
use App\Models\Games;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    //
    public function home() 
    {
        $user = Auth::user();
        $games = Games::paginate(8);
        $data = [
            'user' => $user,
            'games' => $games
        ];
        return view("home.home", $data);
    }

    public function profile() {
        $user = Auth::user();
        $data = [
            'user' => $user,
        ];
        return view('home.profile', $data);
    }

    public function myGames() 
    {
        $user = Auth::user();
        $games = Games::where('user_id', $user->id)->paginate(8);
        $data = [
            'user' => $user,
            'games' => $games,
        ];
        return view('home.myGames', $data);
    }
}
