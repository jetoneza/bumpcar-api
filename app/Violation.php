<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Violation
 *
 * @package App
 * @author jet.oneza <jet.oneza@gmail.com>
 */
class Violation extends Model
{
  const VIOLATION_COLLISION = 'collision';
  const VIOLATION_SPEEDING = 'over_speeding';
  const VIOLATION_RED_LIGHT = 'beating_red_light';
  const VIOLATION_WRONG_LANE = 'wrong_lane';

  public function events()
  {
    return $this->belongsTo('App\Event');
  }
}
