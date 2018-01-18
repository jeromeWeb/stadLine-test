<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class UserStats extends Model
{

	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'won', 'total_points', 'won_bets',
    ];

    // Retrouver l'utilisateur
    public function user() {
    	return $this->belongsTo('App\User');
    }

    // Retrouver les détails des statistiques
    public function statsDetails() {
    	return $this->hasMany('App\UserStatsDetails');
    }


}
