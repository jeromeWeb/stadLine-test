<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Player;
use App\Round;
use App\RoundUser;
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
    return Round::where('game_id', $this->id)->orderByDesc('nb_round')->first();
  }

  public function calculateNbCards(){
    $count = $this->getCurrentRoundCount();
    return $count <= 10? $count + 10 : $count - 10;
  }

  public function calculateScore($nb_card, $score){
    return  (10 + $score - $nb_card) * $score + 10;
  }

  public function addRound(){
    if($this->getCurrentRoundCount() <= 20){
      $round = $this->getCurrentRound();
      return Round::create([
        'game_id' => $this->id,
        'nb_round' => $round?$round->nb_round + 1: 1,
        'nb_card' => $this->calculateNbCards()
      ]);
    }else{
      return false;
    }
  }

  public function setPlayers($users){
    foreach ($users as $user) {
      RoundUser::create([
        'round_id' => $this->getCurrentRound()->id,
        'user_id' => $user->id,
        'game_id' => $this->id
      ]);
    }
  }

}
