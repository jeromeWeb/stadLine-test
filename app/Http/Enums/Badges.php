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

  function getAllTypes(){
    return [
      self::POINT_RECORD, self::PERFECT_WEEK, self::SERIAL_WINNER,
      self::SERIAL_SCORE, self::VICTORIES, self::DOWN_007,
      self::UP_007, self::NOSTRADAMUS
          ];
  }
}
