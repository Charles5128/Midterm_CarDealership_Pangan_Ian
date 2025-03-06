<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Car;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $cars = [
            [
                'make' => 'Toyota', 
                'model' => 'Corolla', 
                'year' => 2020, 
                'miles' => 30000, 
                'image' => 'cars/toyota_corolla.jpg'
            ],
            [
                'make' => 'Honda', 
                'model' => 'Civic', 
                'year' => 2019, 
                'miles' => 40000, 
                'image' => 'cars/honda_civic.jpg'
            ],
            [
                'make' => 'Ford', 
                'model' => 'Mustang', 
                'year' => 2018, 
                'miles' => 50000, 
                'image' => 'cars/ford_mustang.jpg'
            ],
            [
                'make' => 'Nissan', 
                'model' => 'gtr', 
                'year' => 2021, 
                'miles' => 25000, 
                'image' => 'cars/nissan_gtr.jpg'
            ],
            [
                'make' => 'Ferrari', 
                'model' => 'f80', 
                'year' => 2022, 
                'miles' => 15000, 
                'image' => 'cars/f80.jpeg'
            ],
            [
                'make' => 'Honda', 
                'model' => 'nsx', 
                'year' => 2022, 
                'miles' => 15000, 
                'image' => 'cars/nsxHonda.jpeg'
            ],
        ];

        foreach ($cars as $car) {
            Car::create($car);
        }
    }
}
