<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Round extends Model
{

	public $table = 'rounds';
   	public $timestamps = false;

	public function users(){

        return $this->hasMany(User::class, 'user_id');
    }

	public function game(){
		
		return $this->belongsTo(Game::class);
	}

}
