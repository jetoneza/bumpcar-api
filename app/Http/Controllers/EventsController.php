<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Event;

/**
 * Class EventsController
 *
 * @package App\Http\Controllers
 * @author jet.oneza <jet.oneza@gmail.com>
 */
class EventsController extends Controller
{

  const APP_KEY = 'oxotTRkIbWOvM90Bb9gp8UsTbMsEc2hm';

  public function index(Request $request)
  {
    $key = $request->get('key');
    if ($key === self::APP_KEY) {
      $events = Event::with('place')->with('violations')->get();

      $sorted = $events->sortBy('created_at');

      return $sorted->values()->all();
    } else {
      return ['error' => 'Your query is not authorized!'];
    }
  }
}
