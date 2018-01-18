<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TIE\

class GamesController extends Controller
{
    public function point(){

    	DB::table('rounduser')->insert([
         'bet' => $bet,

       ]);


    }
}
