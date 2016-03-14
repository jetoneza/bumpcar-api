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
    $violation->type     = Violation::VIOLATION_COLLISION;
    $violation->file_url = '';
    $violation->speed    = 21.23;
    $violation->save();

    $violation           = new Violation();
    $violation->event_id = 1;
    $violation->type     = Violation::VIOLATION_RED_LIGHT;
    $violation->file_url = '';
    $violation->speed    = 24.54;
    $violation->save();

    $violation           = new Violation();
    $violation->event_id = 2;
    $violation->type     = Violation::VIOLATION_SPEEDING;
    $violation->file_url = '/assets-src/files/screenshots/speeding_1.jpg';
    $violation->speed    = 108.24;
    $violation->save();

    $violation           = new Violation();
    $violation->event_id = 3;
    $violation->type     = Violation::VIOLATION_COLLISION;
    $violation->file_url = '';
    $violation->speed    = 23.44;
    $violation->save();

    $violation           = new Violation();
    $violation->event_id = 3;
    $violation->type     = Violation::VIOLATION_WRONG_LANE;
    $violation->file_url = '';
    $violation->speed    = 25.44;
    $violation->save();

    $violation           = new Violation();
    $violation->event_id = 4;
    $violation->type     = Violation::VIOLATION_WRONG_LANE;
    $violation->file_url = '';
    $violation->speed    = 21.16;
    $violation->save();

    $violation           = new Violation();
    $violation->event_id = 5;
    $violation->type     = Violation::VIOLATION_RED_LIGHT;
    $violation->file_url = '';
    $violation->speed    = 24.50;
    $violation->save();
  }
}
