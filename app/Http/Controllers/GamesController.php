<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;

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
      $player_names= $request->get('players');
      $players = User::whereIn("pseudo", $player_names);
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

    public function dataEndGame(Request $request){
      $game = Game::find($request->get('game_id'));
      $rounds = $game->rounds();
      $i = 1 ;
      $data_array = [
        '1' => [],
        '2' => [],
        '3' => [],
        '4' => [],
        '5' => [],
        '6' => [],
        '7' => [],
        '8' => [],
        '9' => [],
        '10' => [],
        '11' => [],
        '12' => [],
        '13' => [],
        '14' => [],
        '15' => [],
        '16' => [],
        '17' => [],
        '18' => [],
        '19' => [],
         '20'=> []
       ];

      foreach($rounds as $round){
        $players = $round->players();
        foreach($players as $player){
          $data_array[$i][] = [
            'name' => $player->user->pseudo,
            'bet' => $player->bet,
            'result' => $player->result,
            'point' => $player->point
          ];

          if($i == 1){
            $pseudo[] = $player->user->pseudo;
          }
        }
        $i++;
      }

      return view('pages.tableau')
            ->with('pseudo')
            ->with('data_array');
    }

}
