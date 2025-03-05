<?php

namespace App\Filament\Resources\InvoiceResource\Widgets;

use App\Models\Invoice;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class InvoiceStatusWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Выполнено', Invoice::where('status', 'выполнено')->count()),
            Stat::make('В работе', Invoice::whereIn('status', ['в обработке', 'взят в работу'])->count()),
            Stat::make('Отменено', Invoice::where('status', 'не выполнено')->count()),
        ];
    }
}
