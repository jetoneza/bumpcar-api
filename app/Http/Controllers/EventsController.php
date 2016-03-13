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
  public function index()
  {
    $events = Event::all();

    return $events;
  }
}