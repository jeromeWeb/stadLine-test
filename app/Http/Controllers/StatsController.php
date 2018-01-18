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
    	$stats = User::with([
    		'rounds:id',
    		'game:id,created_at',
    		'statsDetails:id,user_stats_id,won,rising_points,points,won_bets',
    		'user_stats:id',
    		'user:pseudo'
    	])->get();

    	// ajouter la vue à renseigner
    	//return views('', ['stats' => $stats]); 
    }
}
