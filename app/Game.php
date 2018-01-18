<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Round;
use DB;

class Game extends Model
{
  public $table = 'games';
  public $timestamps = true;

  public function rounds()
    {
        return $this->hasMany(Round::class, 'round_id');
    }

  public function getPlayers(){
    return User::whereIn('id', DB::table('game_users')->where('game_id', $this->id)->pluck('user_id'))->get();
  }
}
