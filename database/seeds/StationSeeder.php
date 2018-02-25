<?php

use App\Models\Station;
use Illuminate\Database\Seeder;

class StationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Station::truncate();
        $faker = Faker\Factory::create();

        for ($i=0; $i < 100 ; $i++) {
          $Station = Station::create([
            'nama_st' => 'Station '.$faker->firstName,
            'kode_st' => $faker->firstName,
            'kota' => $faker->city,
            'alamat_st' => $faker->streetAddress,
            'tlp_st' => $faker->phoneNumber,
          ]);
        }
      }
}
