<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Place Model
 *
 * @package App
 * @author jet.oneza <jet.oneza@gmail.com>
 */
class Place extends Model
{
  public function events()
  {
    return $this->hasMany('App/Events');
  }
}
