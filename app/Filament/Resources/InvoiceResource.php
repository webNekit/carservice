<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InvoiceResource\Pages;
use App\Filament\Resources\InvoiceResource\Widgets\InvoiceStatusWidget;
use App\Models\Client;
use App\Models\ClientCar;
use App\Models\Invoice;
use App\Models\Service;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Placeholder;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Auth;

class InvoiceResource extends Resource
{
    protected static ?string $model = Invoice::class;
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationGroup = 'Автосервис';
    protected static ?string $navigationLabel = "Накладные";
    protected static ?string $pluralLabel = "Накладные";
    protected static ?int $navigationSort = 3;

    public static function getNavigationBadge(): ?string
    {
        return Invoice::where('status', 'в обработке')->count();
    }

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            Group::make()->schema([
                Section::make()->schema([
                    Select::make('client_id')
                        ->label('Клиент')
                        ->options(Client::all()->pluck('full_name', 'id'))
                        ->searchable()
                        ->required(),

                    Select::make('car_id')
                        ->label('Автомобиль')
                        ->options(function ($get) {
                            $clientId = $get('client_id');
                            if (!$clientId) return [];

                            return ClientCar::where('client_id', $clientId)
                                ->get()
                                ->mapWithKeys(fn($car) => [
                                    $car->id => ($car->vin ? "{$car->brand->name} {$car->model->name} ({$car->vin})" : 'Без VIN')
                                ])
                                ->toArray();
                        })
                        ->searchable(),
                ])->columnSpan(2),

                Section::make()->schema([
                    Select::make('service_id')
                        ->label('Тип услуги')
                        ->options(Service::pluck('name', 'id')->toArray())
                        ->searchable()
                        ->required(),

                    TextInput::make('cost')
                        ->label('Стоимость работ (руб.)')
                        ->numeric()
                        ->minValue(0)
                        ->required()
                        ->reactive(),

                    TagsInput::make('parts')
                        ->label('Запчасти'),

                    Select::make('discount')
                        ->label('Скидка')
                        ->options([
                            null => 'Без скидки',
                            5 => '5%',
                            10 => '10%',
                            15 => '15%',
                        ])
                        ->default(null)
                        ->reactive(),

                    Placeholder::make('final_cost')
                        ->label('Итоговая стоимость (руб.)')
                        ->content(function ($get) {
                            $cost = (float) $get('cost');
                            $discount = (float) $get('discount');
                            return $discount ? $cost - ($cost * ($discount / 100)) : $cost;
                        }),

                    TextInput::make('user_id')
                        ->hidden()
                        ->default(fn() => Auth::id())
                        ->dehydrated(),
                ])->columnSpan(2),

                Section::make()->schema([
                    Textarea::make('note')->label('Примечание'),
                ])->columnSpan(2),
            ])->columnSpan(2),

            Group::make()->schema([
                Section::make()->schema([
                    DatePicker::make('appointment_date')->label('Дата назначения')->required(),
                    DatePicker::make('completion_date')->label('Дата сдачи работы'),
                    Select::make('status')
                        ->label('Статус')
                        ->options([
                            'в обработке' => 'В обработке',
                            'взят в работу' => 'Взят в работу',
                            'выполнено' => 'Выполнено',
                            'не выполнено' => 'Не выполнено',
                        ])
                        ->required(),
                ])->columnSpan(1),
            ])->columnSpan(1),
        ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('client.full_name')->label('Клиент')->sortable(),
                Tables\Columns\TextColumn::make('car.vin')->label('VIN')->searchable(),
                Tables\Columns\TextColumn::make('status')->label('Статус')
                    ->badge()
                    ->sortable()
                    ->colors([
                        'в обработке' => 'yellow',
                        'взят в работу' => 'yellow',
                        'выполнено' => 'green',
                        'не выполнено' => 'red',
                    ]),
                Tables\Columns\TextColumn::make('cost')->label('Стоимость (₽)')->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')->label('Фильтр по статусу')->options([
                    'в обработке' => 'В обработке',
                    'взят в работу' => 'Взят в работу',
                    'выполнено' => 'Выполнено',
                    'не выполнено' => 'Не выполнено',
                ]),
                SelectFilter::make('user_id')
                    ->searchable()
                    ->label('Фильтр по сотруднику')
                    ->options(User::where('role', 'user')->pluck('name', 'id')),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getWidgets(): array
    {
        return [
            InvoiceStatusWidget::class,
        ];
    }

    public static function generateInvoicePdf(Invoice $invoice)
{
    $discount = (float) $invoice->discount;
    $cost = (float) $invoice->cost;
    $finalCost = $discount ? $cost - ($cost * ($discount / 100)) : $cost;

    $data = [
        'client' => $invoice->client,
        'car' => $invoice->car,
        'service' => $invoice->service,
        'user' => $invoice->user,
        'cost' => $cost,
        'finalCost' => $finalCost,
        'appointmentDate' => $invoice->appointment_date,
        'completionDate' => $invoice->completion_date,
        'note' => $invoice->note,
    ];

    $pdf = Pdf::loadView('invoices.pdf', $data);

    return $pdf->download("invoice_{$invoice->id}.pdf");
}


    public static function getPages(): array
    {
        return [
            'index' => Pages\ListInvoices::route('/'),
            'create' => Pages\CreateInvoice::route('/create'),
            'edit' => Pages\EditInvoice::route('/{record}/edit'),
        ];
    }
}
