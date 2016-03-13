<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Event Model
 *
 * @package App
 * @author jet.oneza <jet.oneza@gmail.com>
 */
class Event extends Model
{
  public function place()
  {
    return $this->belongsTo('App\Place');
  }

  public function violations()
  {
    return $this->hasMany('App\Violation');
  }
}
