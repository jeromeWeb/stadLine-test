<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use App\User;

class GamesController extends Controller
{
    public function getHistoricPage(Request $request){
      $games = Game::where('is_over', 1)
                      ->orderBy('updated_at')
                      ->limit(25)
                      ->get();
      return view('Game.historic')->with('games', $games);
    }

    public function loadHistoric(Request $request){
      $page = $request->get('page');
      $sorter = $request->get('sorter');
      $page = $page?$page + 1:0;
      $sorter = $sorter?$sorter:'none';
      $justMe = $request->get('justMe');

      $games = null;//Manque le reste pour faire la requête...

      return view('Game.historic_element')
                ->with('games', $games)
                ->with('page', $page);
    }

    public function createGame(Request $request){
      $player_names= json_decode($request->get('players'));
      $players = User::whereIn("pseudo", $player_names)->get();
      if($players->count() < count($player_names)){
        $player_names = array_diff($player_names, $players->pluck('pseudo')->toArray());
        foreach ($player_names as $player_name) {
          $players->push(User::create([
            'pseudo' => $player_name,
            'type' => 0
          ]));
        }
      }

      $game = Game::create();
      foreach ($players as $player) {
        $game->addPlayer($player);
      }

      $this->beginTurn($game);
    }

    public function beginTurn($game){
      $game->addRound();
    }

    public function setPredictions($requests){

    }

}
