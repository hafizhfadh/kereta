<?php

use App\Models\Train;
use App\Models\Train_Class;
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
        $train->save();

        $seat = new Train_Class();
        $seat->train_id = $train->id;
        $seat->exec_seat = rand(1,50);
        $seat->bus_seat = rand(1,50);
        $seat->eco_seat = rand(1,50);
        $seat->price = rand(100000,500000);
        $seat->save();
      }
    }
}
