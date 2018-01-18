<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;

class GamesController extends Controller
{
<<<<<<< HEAD
    public function bet(Resquest $request){

    	DB::table('round_user')->insert([
        'round_id' => $request->round_id,
        'user_id' => $request->user_id,
        'bet' => $request->bet,
       ]);
    }
=======
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
>>>>>>> 5cebb76a135da47b3030a649bec429baf4f20c80

      $games = null;//Manque le reste pour faire la requête...

<<<<<<< HEAD
    public function result(Request $request){

    	DB::table('round_user')->insert([
        'result' => $request->result,
       ]);
=======
      return view('Game.historic_element')
                ->with('games', $games)
                ->with('page', $page);
>>>>>>> 5cebb76a135da47b3030a649bec429baf4f20c80
    }

}
