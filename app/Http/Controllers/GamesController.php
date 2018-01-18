<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use App\User;
use App\RoundUser;
use App\Round;

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

      return view('pages.start-tour')
              ->with('game', $game);
    }

    public function beginTurn(Request $request){
      $game = Game::find($request->get('game_id'));
      $round = $game->addRound();
      if ($round) {
        $game->setPlayers($game->players->pluck('user'));
        return view('components.bet.input-bet')
                    ->with('game', $game)
                    ->with('round', $round);
      }else{
        $this->loadScore($game);
      }
    }

    public function fillBet(Request $request){
      $game = Game::find($request->get('game_id'));
      $round = $game->getCurrentRound();
      $bets = $request->get('bets');
      foreach ($bets as $user_id => $value) {
        $round_user = RoundUser::where('round_id', $round->id)->where('user_id', $user_id)->first();
        $round_user->bet = $value;
        $round_user->save();
      }
      return view('components.bet.input-betResult')
                  ->with('game', $game)
                  ->with('round', $round)
                  ->with('bets', $bets);
    }


}
