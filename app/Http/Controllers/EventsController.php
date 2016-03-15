<?php

namespace App\Http\Controllers;

use App\Violation;
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
      $events = Event::with('place')->with('violations')->orderBy('created_at', 'DESC')->get();

      return $events;
    } else {
      return ['error' => 'Your query is not authorized!'];
    }
  }
}
