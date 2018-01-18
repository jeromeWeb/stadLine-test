<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TIE\

class GamesController extends Controller
{
    public function bet(Resquest $request){

    	DB::table('round_user')->insert([
        'round_id' => $request->round_id,
        'user_id' => $request->user_id,
        'bet' => $request->bet,
       ]);
    }


    public function result(Request $request){

    	DB::table('round_user')->insert([
        'result' => $request->result,
       ]);
    }
}
