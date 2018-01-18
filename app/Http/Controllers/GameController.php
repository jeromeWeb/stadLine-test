<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;

class GameController extends Controller
{
    public function savePlayers(Request $request)
	{     
		Log::info($Request->savePlayers);
	}
}
