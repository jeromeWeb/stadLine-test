<?php
namespace App\Repositories;

use Illuminate\Support\Facades\App;
use App\Enums\Badges;
use App\Badge;
use Log;

class BadgeRepository
{
    //Vérifie si de nouveaux badges sont obtenus et les retourne
    public function checkBadges($user){
      $user_badges = $user->badges;
      $notAquired = array_diff(Badges::getAllTypes(), $user_badges->pluck('type')->toArray());
      // dd($notAquired);
      foreach ($user_badges as $badge) {
        $function = "condition_".$badge->type;
        $newStep = $this->$function($user);
        if($newStep > $badge->step){
          $badge->step = $newStep;
          $badge->save();
        }
      }
      foreach ($notAquired as $badge_type) {
          $function = "condition_".$badge_type;
          $step = $this->$function($user);
          if($step > 0){
            Badge::create([
                'user_id'=> $user->id,
                'type' => $badge_type,
                'step' => $step
              ]);
          };
      }
    }

    //CONDITIONS
    private function condition_point_record($user){
      switch (strlen($user->name)) {
        case 1:return 1;
        case 2:return 2;
        case 3:return 3;
        case 4:return 4;
        default:return 0;
      }
    }

    private function condition_perfect_week($user){
      return $user->name == "Dodo"?1:0;
    }
}
