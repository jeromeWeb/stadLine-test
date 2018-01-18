<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Game;
use App\Repositories\BadgeRepository;

class BadgesController extends Controller
{
    private $badgeRepository;

    public function __construct(BadgeRepository $badgeRepository)
    {
        $this->badgeRepository = $badgeRepository;
    }

    public function checkBadges(){

    }

    public function getTestPage(){
      $user = User::Find(1);
      $this->badgeRepository->checkBadges($user);
      $badges = $user->badges;
      $game = Game::Find(1);

      return view('testBadgesPage')->with('user', $user)->with('badges', $badges)->with('game', $game);
    }
}
