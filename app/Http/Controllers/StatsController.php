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

    public function showStatsGames($user_id) {
    	$stats = User::with(['rounds:id', 'game:id,time', 'statsDetails:id,user_stats_id,won,rising_points,points,won_bets', 'user_stats:id', 'user:pseudo']);
    }

    public function showStatsDetails($game_id) {
    	$stats = UserStatsDetails::where('game_id', $game_id);

    	// ajouter la vue à renseigner
    	//return views('', ['stats' => $stats]); 
    }
}
