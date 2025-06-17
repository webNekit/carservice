<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class InvoicesSeeder extends Seeder
{
    public function run()
    {
        // Получаем ID связанных сущностей
        $clientIds = DB::table('clients')->pluck('id')->toArray();
        $carIds = DB::table('client_cars')->pluck('id')->toArray();
        $userIds = DB::table('users')->pluck('id')->toArray();
        $serviceIds = DB::table('services')->pluck('id')->toArray();

        $invoices = [
            // 1. Замена масла
            [
                'client_id' => $clientIds[0],
                'car_id' => $carIds[0],
                'user_id' => $userIds[1],
                'service_id' => $serviceIds[0],
                'appointment_date' => Carbon::today()->subDays(10),
                'completion_date' => Carbon::today()->subDays(9),
                'cost' => 2500.00,
                'status' => 'выполнено',
                'note' => 'Использовано синтетическое масло 5W-30',
                'discount' => 5,
                'parts' => json_encode(['Масло моторное' => 1, 'Масляный фильтр' => 1]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            // 2. Замена тормозных колодок
            [
                'client_id' => $clientIds[1],
                'car_id' => $carIds[1],
                'user_id' => $userIds[2],
                'service_id' => $serviceIds[1],
                'appointment_date' => Carbon::today()->subDays(8),
                'completion_date' => Carbon::today()->subDays(7),
                'cost' => 5000.00,
                'status' => 'выполнено',
                'note' => 'Заменены передние колодки',
                'discount' => null,
                'parts' => json_encode(['Тормозные колодки' => 2]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            // 3. Диагностика
            [
                'client_id' => $clientIds[2],
                'car_id' => $carIds[2],
                'user_id' => $userIds[1],
                'service_id' => $serviceIds[2],
                'appointment_date' => Carbon::today()->subDays(6),
                'completion_date' => Carbon::today()->subDays(6),
                'cost' => 3000.00,
                'status' => 'выполнено',
                'note' => 'Полная диагностика ходовой части',
                'discount' => 10,
                'parts' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            // 4. Развал-схождение
            [
                'client_id' => $clientIds[3],
                'car_id' => $carIds[3],
                'user_id' => $userIds[2],
                'service_id' => $serviceIds[3],
                'appointment_date' => Carbon::today()->subDays(5),
                'completion_date' => null,
                'cost' => 3500.00,
                'status' => 'в работе',
                'note' => 'Требуется регулировка углов',
                'discount' => null,
                'parts' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            // 5. Замена фильтров
            [
                'client_id' => $clientIds[4],
                'car_id' => $carIds[4],
                'user_id' => $userIds[1],
                'service_id' => $serviceIds[4],
                'appointment_date' => Carbon::today()->subDays(4),
                'completion_date' => Carbon::today()->subDays(3),
                'cost' => 2000.00,
                'status' => 'выполнено',
                'note' => 'Заменены воздушный и салонный фильтры',
                'discount' => 15,
                'parts' => json_encode(['Воздушный фильтр' => 1, 'Салонный фильтр' => 1]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            // 6. Ремонт двигателя
            [
                'client_id' => $clientIds[5],
                'car_id' => $carIds[5],
                'user_id' => $userIds[2],
                'service_id' => $serviceIds[5],
                'appointment_date' => Carbon::today()->subDays(3),
                'completion_date' => null,
                'cost' => 15000.00,
                'status' => 'в работе',
                'note' => 'Замена прокладки ГБЦ',
                'discount' => null,
                'parts' => json_encode(['Прокладка ГБЦ' => 1, 'Масло' => 1, 'Антифриз' => 1]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            // 7. Замена аккумулятора
            [
                'client_id' => $clientIds[6],
                'car_id' => $carIds[6],
                'user_id' => $userIds[1],
                'service_id' => $serviceIds[6],
                'appointment_date' => Carbon::today()->subDays(2),
                'completion_date' => Carbon::today()->subDays(1),
                'cost' => 4000.00,
                'status' => 'выполнено',
                'note' => 'Установлен аккумулятор 60Ah',
                'discount' => null,
                'parts' => json_encode(['Аккумулятор' => 1]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            // 8. Шиномонтаж
            [
                'client_id' => $clientIds[7],
                'car_id' => $carIds[7],
                'user_id' => $userIds[2],
                'service_id' => $serviceIds[7],
                'appointment_date' => Carbon::today()->subDays(1),
                'completion_date' => Carbon::today(),
                'cost' => 3000.00,
                'status' => 'выполнено',
                'note' => 'Переобули на летнюю резину',
                'discount' => 10,
                'parts' => json_encode(['Вентили' => 4, 'Балансировочные грузики' => 1]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            // 9. Покраска кузова
            [
                'client_id' => $clientIds[8],
                'car_id' => $carIds[8],
                'user_id' => $userIds[1],
                'service_id' => $serviceIds[8],
                'appointment_date' => Carbon::today(),
                'completion_date' => null,
                'cost' => 12000.00,
                'status' => 'в обработке',
                'note' => 'Локальная покраска переднего крыла',
                'discount' => null,
                'parts' => json_encode(['Краска' => 1, 'Лак' => 1, 'Грунтовка' => 1]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            // 10. Химчистка салона
            [
                'client_id' => $clientIds[9],
                'car_id' => $carIds[9],
                'user_id' => $userIds[2],
                'service_id' => $serviceIds[9],
                'appointment_date' => Carbon::today()->addDays(1),
                'completion_date' => null,
                'cost' => 6000.00,
                'status' => 'запланировано',
                'note' => 'Полная химчистка салона и чистка кожи',
                'discount' => 20,
                'parts' => json_encode(['Чистящее средство' => 1, 'Кондиционер для кожи' => 1]),
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('invoices')->insert($invoices);
    }
}
