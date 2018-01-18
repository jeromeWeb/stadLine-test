<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserStats;

class StatsController extends Controller
{
    /**
     * Show the mains stats for the given user.
     *
     * @param  int  $user_id
     * @return Response
     */

    public function showStats($user_id) {
    	$stats = UserStats::where('user_id', $user_id);

    	// ajouter la vue à renseigner
    	//return views('', ['stats' => $stats]); 
    }

    /**
     * Show the detailed stats for the given game.
     *
     * @param  int  $user_id
     * @return Response
     */

    public function showStats($game_id) {
    	$stats = UserStatsDetails::where('game_id', $game_id);

    	// ajouter la vue à renseigner
    	//return views('', ['stats' => $stats]); 
    }
}
