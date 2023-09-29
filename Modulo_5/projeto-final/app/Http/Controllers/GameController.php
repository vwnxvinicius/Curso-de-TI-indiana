<?php

namespace App\Http\Controllers;

use App\Models\Games;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class GameController extends Controller
{
    //
    public function addGame() 
    {
        return view('games.addGamesForm');
    }

    public function editGame($id) 
    {
        $game = Games::find($id);
        return view('games.editGame', ['game' => $game]);
    }


    public function gamePage(int $id)
    {
        $game = Games::find($id);
        $user = User::find($game->user_id);
        return view('games.gamePage', ['game'=> $game, 'user'=>$user]);
    }

    public function createGame(Request $request) {
        $user_id = Auth::id();
        $new_game = new Games();
        $new_game->title = $request->title;
        $new_game->description = $request->description;
        $new_game->tags = $request->tags;
        $new_game->official_link = $request->official_link;
        $new_game->youtube_link = $request->youtube_link;
        $new_game->user_id = $user_id;
        if ($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/games/', $filename);
            $new_game->image = $filename;
        }
        $new_game->save();
        return redirect('/myGames');
    }

    public function updateGame(Request $request, $id) {
        $game = Games::find($id);

        $game->title = $request->title;
        $game->description = $request->description;
        $game->tags = $request->tags;
        $game->official_link = $request->official_link;
        $game->youtube_link = $request->youtube_link;
        if ($request->hasFile('image'))
        {
            $destination = 'uploads/games/'.$game->image;
            if (File::exists($destination)) 
            {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/games/', $filename);
            $game->image = $filename;
        }
        $game->update();
        return redirect('/gamePage'.'/'.$game->id)->with('status', 'Atualizado com sucesso');
    }

    public function deleteGame($id) 
    {
        $game = Games::find($id);
        $destination = 'uploads/games/'.$game->image;
        if (File::exists($destination)) 
        {
            File::delete($destination);
        }
        $game->delete();
        return redirect('/myGames')->with('status', 'Deletado com sucesso');
    }
}
