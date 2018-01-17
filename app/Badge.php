<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Badge extends Model
{
  protected $table = 'user_badges';

  public function user(){
    return $this->hasOne(User::class, 'id', 'user_id');
  }
}
