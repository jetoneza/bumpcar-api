<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

/**
 * Class TestController
 *
 * @package App\Http\Controllers
 * @author jet.oneza <jet.oneza@gmail.com>
 */
class TestController extends Controller
{
  public function test()
  {
    $test = [
      'type'    => 'test',
      'message' => 'This is only a test!'
    ];

    return json_encode($test);
  }
}