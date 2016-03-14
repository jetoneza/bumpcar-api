<?php

use Illuminate\Database\Seeder;
use App\Violation;

class ViolationsSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $violation           = new Violation();
    $violation->event_id = 1;
    $violation->type     = Violation::VIOLATION_SPEEDING;
    $violation->file_url = '/assets-src/files/screenshots/speeding_1.jpg';
    $violation->speed    = 108.24;
    $violation->save();

    $violation           = new Violation();
    $violation->event_id = 2;
    $violation->type     = Violation::VIOLATION_WRONG_LANE;
    $violation->file_url = '/assets-src/files/screenshots/wrong_lane1.jpg';
    $violation->speed    = 21.16;
    $violation->save();

    $violation           = new Violation();
    $violation->event_id = 3;
    $violation->type     = Violation::VIOLATION_RED_LIGHT;
    $violation->file_url = '/assets-src/files/screenshots/red.jpg';
    $violation->speed    = 24.50;
    $violation->save();
  }
}
