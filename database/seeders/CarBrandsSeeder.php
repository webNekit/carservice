<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CarBrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('car_brands')->insert([
            ['name' => 'Toyota', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Honda', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Ford', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Chevrolet', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Volkswagen', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'BMW', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Mercedes-Benz', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Audi', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Nissan', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Hyundai', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kia', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Volvo', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Subaru', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Mazda', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Lexus', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Jeep', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Tesla', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Porsche', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Ferrari', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Lamborghini', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Land Rover', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Jaguar', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Mitsubishi', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Peugeot', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Renault', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Citroen', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Fiat', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Alfa Romeo', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Skoda', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Seat', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
