<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GamesController extends Controller
{
    public function getHistoricPage(Request $request){
      $games = null;//Manque le reste pour faire la requête...
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

}
