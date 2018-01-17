<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class BadgesController extends Controller
{
    public function checkBadges(){

    }

    public function getTestPage(){
      $user = User::Find(1);
      $badges = $user->badges;
      return view('testBadgesPage')->with('user', $user)->with('badges', $badges);
    }
}
