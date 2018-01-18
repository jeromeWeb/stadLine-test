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


  public function players(){
    return $this->hasMany(Player::class, 'game_id');
  }

  public function countPlayers(){
    return $this->players->count();
  }

  public function winners(){
    return $this->players->where('winner', 1);
  }

}
