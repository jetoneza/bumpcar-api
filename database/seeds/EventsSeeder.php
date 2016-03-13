<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class EventsSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('events')->insert([
      'code'       => str_random(10),
      'fileUrl'    => '/assets-src/files/videos/collision.avi',
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now()
    ]);
  }
}
