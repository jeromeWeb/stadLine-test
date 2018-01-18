<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoundUser extends Model
{
    public $table='round_users';
    public $timestamps = false;
    protected $fillable = ['round_id', 'user_id'];
}
