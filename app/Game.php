<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Game extends Model
{
  public $table = 'games';
  public $timestamps = true;

  public function rounds()
    {
        return $this->hasMany(Round::class, 'round_id');
    }
}
