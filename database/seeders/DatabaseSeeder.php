<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UsersSeeder::class,
            CarBrandsSeeder::class,
            CarModelsSeeder::class,
            ClientsSeeder::class,
            ClientCarsSeeder::class,
            ServicesSeeder::class,
            InvoicesSeeder::class,
            HistoriesSeeder::class,
        ]);
    }
}
