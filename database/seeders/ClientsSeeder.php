<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientsSeeder extends Seeder
{
    public function run()
    {
        $clients = [
            [
                'last_name' => 'Иванов',
                'first_name' => 'Иван',
                'phone' => '+79161234567',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'last_name' => 'Петров',
                'first_name' => 'Пётр',
                'phone' => '+79162234567',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'last_name' => 'Сидоров',
                'first_name' => 'Сергей',
                'phone' => '+79163234567',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'last_name' => 'Смирнова',
                'first_name' => 'Анна',
                'phone' => '+79164234567',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'last_name' => 'Кузнецов',
                'first_name' => 'Дмитрий',
                'phone' => '+79165234567',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'last_name' => 'Васильева',
                'first_name' => 'Елена',
                'phone' => '+79166234567',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'last_name' => 'Попов',
                'first_name' => 'Алексей',
                'phone' => '+79167234567',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'last_name' => 'Новикова',
                'first_name' => 'Ольга',
                'phone' => '+79168234567',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'last_name' => 'Фёдоров',
                'first_name' => 'Михаил',
                'phone' => '+79169234567',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'last_name' => 'Морозова',
                'first_name' => 'Наталья',
                'phone' => '+79160234567',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('clients')->insert($clients);
    }
}
