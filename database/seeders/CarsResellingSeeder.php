<?php

namespace Database\Seeders;

use App\Models\CarResell;
use App\Models\CarReselling;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CarsResellingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->format('Y-m-d H:i:s');
        $cars = [
            [
                // 'id' => 1,
                'name' => "Normal Car Name",
                'user_id' => User::all()->random()->id,
                'price' => 10000,
                'top_speed' => 100,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                // 'id' => 2,
                'name' => "Luxury Car Name",
                'user_id' => User::all()->random()->id,
                'price' => 20000,
                'top_speed' => 200,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                // 'id' => 3,
                'name' => "Sports Car Name",
                'user_id' => User::all()->random()->id,
                'price' => 30000,
                'top_speed' => 300,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                // 'id' => 4,
                'name' => "Sports Car Name 2",
                'user_id' => User::all()->random()->id,
                'price' => 40000,
                'top_speed' => 400,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                // 'id' => 5,
                'name' => "Normal Name 2",
                'user_id' => User::all()->random()->id,
                'price' => 400,
                'top_speed' => 40,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                // 'id' => 6,
                'name' => "Luxury Name 2",
                'user_id' => User::all()->random()->id,
                'price' => 200,
                'top_speed' => 299,
                'created_at' => $now,
                'updated_at' => $now
            ],
        ];

        /**
         * Saving Default Cars records
         */
        foreach ($cars as $car) {
            CarResell::create($car);
        }
    }
}
