<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GamesController extends Controller
{
    public function loadHistoric(Request $request){
      $page = $request->get('page');
      $filter = $request->get('filter');
      $page = $page?$page + 1:0;
      $filter = $filter?$filter:'none';
      $justMe = $request->get('justMe');

      $games = null;//Manque le reste pour faire la requête...

      $params = collect([
        'page'=>$page,
        'filter'
      ]);

      return view('Game.historic_element')
                ->with('games', $games)
                ->with('page', $page);
    }

}
