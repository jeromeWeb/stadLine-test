<?php

namespace App\Enums;

abstract class Badges
{
  const POINT_RECORD = 'point_record';
  const PERFECT_WEEK = 'perfect_week';
  const SERIAL_WINNER = 'serial_winner';
  const SERIAL_SCORE = 'serial_score';
  const VICTORIES = 'victories';
  //Find solution for master (avoid n types)
  const DOWN_007 = "down_007";
  const UP_007 = 'up_007';
  const NOSTRADAMUS = 'nostradamus';

  public static function getAllTypes(){
    return [
      self::POINT_RECORD, self::PERFECT_WEEK, self::SERIAL_WINNER,
      self::SERIAL_SCORE, self::VICTORIES, self::DOWN_007,
      self::UP_007, self::NOSTRADAMUS
          ];
  }

  //Idée: ajouter decription en plus du name, histoire d'avoir la possibilité d'avoir des noms plus fun
  public static function getName($badge){
    switch ($badge->type) {
      case self::POINT_RECORD:
        switch ($badge->step) {
          case 1: return "250 points!"; break;
          case 2: return "275 points!"; break;
          case 3: return "300 points!"; break;
          default:break;
        }
      break;
      case self::PERFECT_WEEK:return "Semaine parfaite!";break;
      case self::SERIAL_WINNER:
        switch ($badge->step) {
          case 1: return "Serial Winner"; break;
          case 2: return "Invincible"; break;
          default:break;
        }
      break;
      case self::SERIAL_SCORE:
        switch ($badge->step) {
          case 1: return "3x200!"; break;
          case 2: return "3x250!"; break;
          case 3: return "3x300!"; break;
          default:break;
        }
      break;
      case self::VICTORIES:
        switch ($badge->step) {
          case 1: return "10 victoires"; break;
          case 2: return "20 victoires"; break;
          case 3: return "50 victoires"; break;
          default:break;
        }
      break;
      case self::DOWN_007:return "Dnob Semaj";break;
      case self::UP_007:return "James Bond";break;
      case self::NOSTRADAMUS:
        switch ($badge->step) {
          case 1: return "Apprenti Devin"; break;
          case 2: return "Nostradamus"; break;
          case 3: return "Mme Irma"; break;
          default:break;
        }
      break;
      default:break;
    }
  }

  public static function getMaxSteps($badge_type){
    switch ($badge_type) {
      case self::POINT_RECORD:return 3;break;
      case self::PERFECT_WEEK:return 1;break;
      case self::SERIAL_WINNER:return 2;break;
      case self::SERIAL_SCORE:return 3;break;
      case self::VICTORIES:return 3;break;
      case self::DOWN_007:return 1;break;
      case self::UP_007:return 1;break;
      case self::NOSTRADAMUS:return 3;break;
      default:break;
    }
  }
}
