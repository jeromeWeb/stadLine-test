<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Repositories\BadgeRepository;

class BadgesController extends Controller
{
    private $badgeRepository;

    public function __construct(BadgeRepository $badgeRepository)
    {
        $this->badgeRepository = $badgeRepository;
        // $this->badgeRepository = new App\Repositories\BadgeRepository;
    }

    public function checkBadges(){

    }

    public function getTestPage(){
      $user = User::Find(1);
      $this->badgeRepository->checkBadges($user);
      $badges = $user->badges;
      return view('testBadgesPage')->with('user', $user)->with('badges', $badges);
    }
}
