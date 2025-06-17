<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HistoriesSeeder extends Seeder
{
    public function run()
    {
        // Получаем данные из связанных таблиц
        $completedInvoices = DB::table('invoices')
            ->whereNotNull('completion_date')
            ->get();

        $histories = [];

        foreach ($completedInvoices as $invoice) {
            $histories[] = [
                'client_id' => $invoice->client_id,
                'car_id' => $invoice->car_id,
                'invoice_id' => $invoice->id, // Используем id накладной
                'service_id' => $invoice->service_id,
                'appointment_date' => $invoice->appointment_date,
                'completion_date' => $invoice->completion_date,
                'cost' => $invoice->cost,
                'note' => $invoice->note,
                'parts' => $invoice->parts,
                'created_at' => now(),
                'updated_at' => now()
            ];
        }

        // Добавим несколько дополнительных исторических записей без invoice_id
        $additionalHistories = [
            [
                'client_id' => $completedInvoices->first()->client_id,
                'car_id' => $completedInvoices->first()->car_id,
                'invoice_id' => 1, // Явно указываем null
                'service_id' => $completedInvoices->first()->service_id,
                'appointment_date' => Carbon::today()->subMonths(6),
                'completion_date' => Carbon::today()->subMonths(6)->addDays(1),
                'cost' => 2000.00,
                'note' => 'Плановое ТО (до внедрения системы)',
                'parts' => json_encode(['Масло моторное' => 1, 'Фильтр масляный' => 1]),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'client_id' => $completedInvoices->last()->client_id,
                'car_id' => $completedInvoices->last()->car_id,
                'invoice_id' => 2, // Явно указываем null
                'service_id' => $completedInvoices->last()->service_id,
                'appointment_date' => Carbon::today()->subMonths(3),
                'completion_date' => Carbon::today()->subMonths(3)->addDays(1),
                'cost' => 3500.00,
                'note' => 'Замена тормозных колодок (до внедрения системы)',
                'parts' => json_encode(['Тормозные колодки' => 2]),
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('histories')->insert(array_merge($histories, $additionalHistories));
    }
}
