<?php

use Illuminate\Database\Seeder;
use App\Place;

class PlaceSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $place            = new Place();
    $place->name      = 'R. Magsaysay Ave cor CM Recto St';
    $place->latitude  = '7.073615';
    $place->longitude = '125.612537';
    $place->save();

    $place            = new Place();
    $place->name      = 'CM Recto St cor Roxas Ave';
    $place->latitude  = '7.072162';
    $place->longitude = '125.612108';
    $place->save();

    $place            = new Place();
    $place->name      = 'Sta. Ana Ave cor Guerrero St';
    $place->latitude  = '7.076770';
    $place->longitude = '125.616007';
    $place->save();

    $place            = new Place();
    $place->name      = 'CP Garcia cor Matina Pangi';
    $place->latitude  = '7.058688';
    $place->longitude = '125.568795';
    $place->save();

    $place            = new Place();
    $place->name      = 'McArthur - CP Garcia';
    $place->latitude  = '7.059725';
    $place->longitude = '125.551060';
    $place->save();

    $place            = new Place();
    $place->name      = 'Quimpo Blvd cor Tulip Dr';
    $place->latitude  = '7.0517243';
    $place->longitude = '125.59001684';
    $place->save();

    $place            = new Place();
    $place->name      = 'JP Laurel ave. Flyover';
    $place->latitude  = '7.09550548';
    $place->longitude = '125.61598063';
    $place->save();

    $place            = new Place();
    $place->name      = 'Milan Crossing';
    $place->latitude  = '7.10870717';
    $place->longitude = '125.61336279';
    $place->save();

    $place            = new Place();
    $place->name      = 'Francisco Bangoy International Airport Terminal';
    $place->latitude  = '7.13374673';
    $place->longitude = '125.64404726';
    $place->save();

    $place            = new Place();
    $place->name      = 'McArthur Hwy cor Don Julian R. Sr. Ave.';
    $place->latitude  = '7.06180754';
    $place->longitude = '125.59293509';
    $place->save();
  }
}
