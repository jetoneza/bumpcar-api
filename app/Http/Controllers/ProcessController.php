<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

/**
 * Class ProcessController
 *
 * @package App\Http\Controllers
 * @author jet.oneza <jet.oneza@gmail.com>
 */
class ProcessController extends Controller
{

  const APP_KEY = 'oxotTRkIbWOvM90Bb9gp8UsTbMsEc2hm';

  public function index(Request $request)
  {
    $key = $request->get('key');
    if ($key === self::APP_KEY) {

      $name = $request->get('video');

      return [
        'name' => $name
      ];
    } else {
      return ['error' => 'Your query is not authorized!'];
    }
  }
}
