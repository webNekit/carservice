<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HistoryResource\Pages;
use App\Models\History;
use Filament\Infolists\Components\RepeatableEntry;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Infolists\Infolist;
use Filament\Infolists\Components\Repeater;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\Section;

class HistoryResource extends Resource
{
    protected static ?string $model = History::class;
    protected static ?string $navigationIcon = 'heroicon-o-clock';
    protected static ?string $navigationGroup = 'Автосервис';
    protected static ?string $navigationLabel = "История посещений";
    protected static ?int $navigationSort = 4;
    protected static ?string $modelLabel = "";
    protected static ?string $pluralLabel = "История";

    public static function canCreate(): bool
    {
        return false;
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('client.full_name')->label('Клиент')->sortable(),
                Tables\Columns\TextColumn::make('car.vin')->label('VIN')->searchable(),
                Tables\Columns\TextColumn::make('service.name')->label('Услуга')->sortable(),
                Tables\Columns\TextColumn::make('appointment_date')->label('Дата назначения')->sortable(),
                Tables\Columns\TextColumn::make('completion_date')->label('Дата сдачи')->sortable(),
                Tables\Columns\TextColumn::make('cost')->label('Стоимость (₽)')->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('client_id')
                    ->searchable()
                    ->label('Фильтр по клиенту')
                    ->options(\App\Models\Client::all()->pluck('full_name', 'id'))
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }


    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Section::make('Основная информация')
                    ->schema([
                        TextEntry::make('client.first_name')->label('Клиент'),
                        TextEntry::make('car.vin')->label('VIN'),
                        TextEntry::make('service.name')->label('Услуга'),
                        TextEntry::make('appointment_date')->label('Дата назначения'),
                        TextEntry::make('completion_date')->label('Дата сдачи'),
                        TextEntry::make('cost')->label('Стоимость (₽)'),
                        TextEntry::make('note')->label('Примечание'),
                    ])
                    ->columns(2),

                Section::make('Автомобиль')
                    ->schema([
                        TextEntry::make('car.brand.name')->label('Марка'),
                        TextEntry::make('car.model.name')->label('Модель'),
                    ])
                    ->columns(2),

                Section::make('')
                    ->schema([
                        RepeatableEntry::make('client.histories')
                            ->label('Другие посещения')
                            ->schema([
                                TextEntry::make('appointment_date')->label('Дата назначения'),
                                TextEntry::make('service.name')->label('Услуга'),
                                TextEntry::make('car.brand.name')->label('Марка'),
                                TextEntry::make('car.model.name')->label('Модель'),
                                TextEntry::make('car.mileage')->label('Пробег (км)'),
                                TextEntry::make('cost')->label('Стоимость работы'),
                            ])
                            ->columns(4)
                            ->hidden(fn($record) => $record->client->histories->isEmpty()),
                    ]),
            ]);
    }
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListHistories::route('/'),
            'view' => Pages\ViewHistory::route('/{record}'),
        ];
    }
}
