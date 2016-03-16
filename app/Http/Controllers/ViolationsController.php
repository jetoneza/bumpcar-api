<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Violation;
use Carbon\Carbon;

/**
 * Class ViolationsController
 *
 * @package App\Http\Controllers
 * @author jet.oneza <jet.oneza@gmail.com>
 */
class ViolationsController extends Controller
{
  const APP_KEY = 'oxotTRkIbWOvM90Bb9gp8UsTbMsEc2hm';

  public function index(Request $request)
  {
    $key = $request->get('key');
    if ($key == self::APP_KEY) {
      $violations = Violation::all();

      return $violations;
    } else {
      return ['error' => 'Your query is not authorized!'];
    }
  }

  public function count(Request $request)
  {
    $key = $request->get('key');
    if ($key === self::APP_KEY) {

      $startDate = $request->get('startDate');
      $endDate   = $request->get('endDate');

      if ($startDate and $endDate) {
        $startDate = new Carbon($startDate);
        $endDate   = new Carbon($endDate);
      } else {
        $startDate = Carbon::now();
        $endDate   = Carbon::now()->addWeek();
      }

      $overSpeedingCount    = Violation::whereBetween('created_at', [$startDate, $endDate])->where('type', Violation::VIOLATION_SPEEDING)->count();
      $wrongLaneCount       = Violation::whereBetween('created_at', [$startDate, $endDate])->where('type', Violation::VIOLATION_WRONG_LANE)->count();
      $beatingRedLightCount = Violation::whereBetween('created_at', [$startDate, $endDate])->where('type', Violation::VIOLATION_RED_LIGHT)->count();

      return [
        'count' => [
          'over_speeding'     => $overSpeedingCount,
          'wrong_lane'        => $wrongLaneCount,
          'beating_red_light' => $beatingRedLightCount
        ]
      ];
    } else {
      return ['error' => 'Your query is not authorized!'];
    }
  }
}
