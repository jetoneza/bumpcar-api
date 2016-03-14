<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Event;

class EventsSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $event           = new Event();
    $event->code     = str_random(10);
    $event->file_url = '/assets-src/files/videos/speed_detection.mp4';
    $event->place_id = 2;
    $event->save();

    $event           = new Event();
    $event->code     = str_random(10);
    $event->file_url = '/assets-src/files/videos/wrong_lane.avi';
    $event->place_id = 4;
    $event->save();

    $event           = new Event();
    $event->code     = str_random(10);
    $event->file_url = '/assets-src/files/videos/beating_red_light.mp4';
    $event->place_id = 5;
    $event->save();
  }
}
