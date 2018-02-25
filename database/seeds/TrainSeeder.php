<?php

use App\Models\Train;
use Illuminate\Database\Seeder;
class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $faker = Faker\Factory::create();

      for ($a=0; $a < 10; $a++) {
        // Create Train
        $train = new Train();
        $train->train_name = 'Kereta '.$faker->firstName;
        $train->exec_seat = rand(1,50);
        $train->bus_seat = rand(1,50);
        $train->eco_seat = rand(1,50);
        $train->price = rand(100000,500000);
        $train->save();
      }
    }
}
