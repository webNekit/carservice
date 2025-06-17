<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesSeeder extends Seeder
{
    public function run()
    {
        $services = [
            ['name' => 'Замена масла', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Замена тормозных колодок', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Диагностика', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Развал-схождение', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Замена фильтров', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Ремонт двигателя', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Замена аккумулятора', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Шиномонтаж', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Покраска кузова', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Химчистка салона', 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('services')->insert($services);
    }
}
