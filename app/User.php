<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // Retrouver les statistiques de l'utilisateur
    public function stats() {
        return hasOne('App\UserStats');
    }

    // Retrouver les parties gagnées
    public function wonsGames() {
        return belongsToMany('App\Game', 'games_winners', 'user_id', 'game_id');
    }

    // Retrouver les tours joués par l'utilisateur
    public function rounds() {
        return hasMany('App\Round');
    }
}
