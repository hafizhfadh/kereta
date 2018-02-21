<?php

use App\Models\Train;
use App\Models\Wagon;
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

      for ($a=0; $a < 1; $a++) {
        // Create Train
        $train = new Train();
        $train->train_name = 'Kereta '.$faker->firstName;
        $train->save();

        // Create Wagon
        $class = ['1' => 'Executive','2' => 'Busines','3' => 'Economy'];
        $index_class = array_rand($class);
        for ($b=0; $b < 10; $b++) {
          $wagon = Wagon::create([
            'class' => 'Executive',
            'price' => rand(100000, 500000),
            'seat' => rand(20, 50),
            'train_id' => $train->id,
          ]);
        }

        // Create Chair
        // $rand = ['1' => 'A', '2' => 'B', '3' => 'C', '4' => 'D'];
        // $index = array_rand($rand);
        // for ($c=1; $c < 50; $c++) {
        //   $chair = Chair::create([
        //     'row' => $c,
        //     'column' => $rand[$index],
        //     'status' => 'Available',
        //     'wagon_id' => $b,
        //   ]);
        // }
      }
    }
}
