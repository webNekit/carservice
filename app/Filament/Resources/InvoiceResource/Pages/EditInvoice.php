<?php

namespace App\Filament\Resources\InvoiceResource\Pages;

use App\Filament\Resources\InvoiceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Redirect;

class EditInvoice extends EditRecord
{
    protected static string $resource = InvoiceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\Action::make('download_pdf')
                ->label('Скачать накладную')
                ->icon('heroicon-o-arrow-down-tray')
                ->color('primary')
                ->action(fn () => Redirect::to(route('invoice.download.pdf', $this->record->id))),
        ];
    }
}
