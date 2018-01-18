<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Badge;
use App\Game;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'pseudo', 'email', 'password', 'type'
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
    // public function rounds() {
    //     return hasMany('App\Round');
    // }

    public function getScore($game){
      $points = 0;
      $rounds = RoundUser::where('game_id', $game->id)->where('user_id', $this->id)->get();
      foreach ($rounds as $round) {
        $points += $round->point;
      }
      return $points;
    }

    public function badges(){
      return $this->hasMany(Badge::class);
    }
}
