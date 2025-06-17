<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientCarsSeeder extends Seeder
{
    public function run()
    {
        // Получаем ID клиентов и моделей
        $clientIds = DB::table('clients')->pluck('id')->toArray();
        $brandIds = DB::table('car_brands')->pluck('id', 'name')->toArray();
        $modelIds = DB::table('car_models')->pluck('id', 'name')->toArray();

        $clientCars = [
            // Автомобиль для первого клиента
            [
                'client_id' => $clientIds[0],
                'car_brand_id' => $brandIds['Toyota'],
                'car_model_id' => $modelIds['Camry'],
                'vin' => 'JT2BF22K1W0123456',
                'number_plate' => 'А123БВ777',
                'mileage' => 45000,
                'color' => 'Чёрный',
                'created_at' => now(),
                'updated_at' => now()
            ],
            // Второй автомобиль для первого клиента
            [
                'client_id' => $clientIds[0],
                'car_brand_id' => $brandIds['BMW'],
                'car_model_id' => $modelIds['3 Series'],
                'vin' => 'WBAWL73529P123456',
                'number_plate' => 'Х987УК777',
                'mileage' => 120000,
                'color' => 'Серебристый',
                'created_at' => now(),
                'updated_at' => now()
            ],
            // Автомобиль для второго клиента
            [
                'client_id' => $clientIds[1],
                'car_brand_id' => $brandIds['Honda'],
                'car_model_id' => $modelIds['CR-V'],
                'vin' => '5J6RE4H40BL123456',
                'number_plate' => 'О555ТТ777',
                'mileage' => 78000,
                'color' => 'Красный',
                'created_at' => now(),
                'updated_at' => now()
            ],
            // Автомобиль для третьего клиента
            [
                'client_id' => $clientIds[2],
                'car_brand_id' => $brandIds['Mercedes-Benz'],
                'car_model_id' => $modelIds['E-Class'],
                'vin' => 'WDDHF5KB5EA123456',
                'number_plate' => 'С333АВ777',
                'mileage' => 65000,
                'color' => 'Белый',
                'created_at' => now(),
                'updated_at' => now()
            ],
            // Автомобиль для четвёртого клиента
            [
                'client_id' => $clientIds[3],
                'car_brand_id' => $brandIds['Audi'],
                'car_model_id' => $modelIds['A4'],
                'vin' => 'WAUZZZ8K6BA123456',
                'number_plate' => 'В444ЕР777',
                'mileage' => 89000,
                'color' => 'Серый',
                'created_at' => now(),
                'updated_at' => now()
            ],
            // Автомобиль для пятого клиента
            [
                'client_id' => $clientIds[4],
                'car_brand_id' => $brandIds['Volkswagen'],
                'car_model_id' => $modelIds['Golf'],
                'vin' => 'WVWZZZ1KZ8W123456',
                'number_plate' => 'К222НН777',
                'mileage' => 125000,
                'color' => 'Синий',
                'created_at' => now(),
                'updated_at' => now()
            ],
            // Автомобиль для шестого клиента
            [
                'client_id' => $clientIds[5],
                'car_brand_id' => $brandIds['Lexus'],
                'car_model_id' => $modelIds['RX'],
                'vin' => 'JTJHY7AX7H4123456',
                'number_plate' => 'М111АК777',
                'mileage' => 54000,
                'color' => 'Бежевый',
                'created_at' => now(),
                'updated_at' => now()
            ],
            // Автомобиль для седьмого клиента
            [
                'client_id' => $clientIds[6],
                'car_brand_id' => $brandIds['Hyundai'],
                'car_model_id' => $modelIds['Santa Fe'],
                'vin' => 'KM8SC13D44U123456',
                'number_plate' => 'Р666СО777',
                'mileage' => 112000,
                'color' => 'Зелёный',
                'created_at' => now(),
                'updated_at' => now()
            ],
            // Автомобиль для восьмого клиента
            [
                'client_id' => $clientIds[7],
                'car_brand_id' => $brandIds['Kia'],
                'car_model_id' => $modelIds['Sportage'],
                'vin' => 'KNDPMCAC5H7123456',
                'number_plate' => 'У999ХХ777',
                'mileage' => 68000,
                'color' => 'Оранжевый',
                'created_at' => now(),
                'updated_at' => now()
            ],
            // Автомобиль для девятого клиента
            [
                'client_id' => $clientIds[8],
                'car_brand_id' => $brandIds['Nissan'],
                'car_model_id' => $modelIds['Qashqai'],
                'vin' => 'SJNFDAJ11U2123456',
                'number_plate' => 'Т777ТТ777',
                'mileage' => 92000,
                'color' => 'Коричневый',
                'created_at' => now(),
                'updated_at' => now()
            ],
            // Автомобиль для десятого клиента
            [
                'client_id' => $clientIds[9],
                'car_brand_id' => $brandIds['Mazda'],
                'car_model_id' => $modelIds['CX-5'],
                'vin' => 'JM3KE4DY4G0123456',
                'number_plate' => 'Е888КК777',
                'mileage' => 76000,
                'color' => 'Фиолетовый',
                'created_at' => now(),
                'updated_at' => now()
            ],
            // Второй автомобиль для десятого клиента
            [
                'client_id' => $clientIds[9],
                'car_brand_id' => $brandIds['Ford'],
                'car_model_id' => $modelIds['Focus'],
                'vin' => 'WF0DP3TH5G4123456',
                'number_plate' => 'Н555АВ777',
                'mileage' => 145000,
                'color' => 'Жёлтый',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('client_cars')->insert($clientCars);
    }
}
