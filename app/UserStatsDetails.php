<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserStatsDetails extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'won', 'points', 'won_bets',
    ];

    // Retrouver les statistiques globales associées
    public function userStats() {
    	return belongsTo('App\UserStats');
    }

    public function game() {
    	return belongsTo('App\Game');
    }
}
