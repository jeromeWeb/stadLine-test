<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Player extends Model
{
    public $table = 'game_users';
    protected $fillable =[ 'user_id', 'game_id'];

    public function user(){
      return $this->hasOne(User::class, 'id', 'user_id');
    }
}
