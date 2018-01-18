<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Player;
use App\Round;
use DB;

class Game extends Model
{
  public $table = 'games';
  public $timestamps = true;

  public function rounds()
  {
      return $this->hasMany(Round::class, 'game_id');
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

  public function addPlayer($player){
    Player::create([
      'user_id' => $player->id,
      'game_id' =>$this->id
    ]);
  }

  public function getCurrentRoundCount(){
    return $this->rounds->count();
  }

  public function getCurrentRound(){
    return $this->rounds->sortBy('nb_round')->last();
  }

  public function calculateNbCards(){
    $count = getCurrentRound();
    return $count <= 10? 11 - $count : $count - 10;
  }

  public function calculateScore($nb_card, $score){
    return  (10 + $score - $nb_card) * $score + 10;
  }

  public function addRound(){
    Round::create([
      'game_id', $this->id,
      'nb_round' => $this->getCurrentRound()->nb_round + 1,
      'nb_card' => calculateNbCards()
    ]);
  }

}
