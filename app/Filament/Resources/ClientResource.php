<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ClientResource\Pages;
use App\Models\CarBrand;
use App\Models\CarModel;
use App\Models\Client;
use App\Models\ClientCar;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ClientResource extends Resource
{
    protected static ?string $model = Client::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationGroup = 'Автосервис';
    protected static ?string $navigationLabel = "Клиенты";
    protected static ?int $navigationSort = 2;
    protected static ?string $pluralLabel = "Клиенты";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Основная информация')->schema([
                    TextInput::make('last_name')
                        ->label('Фамилия')
                        ->required(),

                    TextInput::make('first_name')
                        ->label('Имя')
                        ->required(),

                    TextInput::make('phone')
                        ->label('Телефон')
                        ->prefix('+')
                        ->maxLength(11)
                        ->minLength(11)
                        ->validationMessages([
                            'minLength' => 'Длина номера не может быть меньше 11 символов.',
                            'maxLength' => 'Длина номера не может быть больше 11 символов.',
                        ])
                        ->helperText('Введите номер телефона в формате 79998887766')
                        ->required()
                        ->columnSpan(2),
                ])->columns(2),

                Section::make('Автомобили клиента')->schema([
                    Repeater::make('cars')
                        ->label('')
                        ->relationship('cars') // Связываем с `ClientCar`
                        ->schema([
                            Select::make('car_brand_id')
                                ->label('Марка автомобиля')
                                ->searchable()
                                ->options(CarBrand::all()->pluck('name', 'id'))
                                ->reactive()
                                ->afterStateUpdated(fn($set) => $set('car_model_id', null))
                                ->required(),

                            Select::make('car_model_id')
                                ->label('Модель автомобиля')
                                ->searchable()
                                ->options(
                                    fn($get) =>
                                    CarModel::where('brand_id', $get('car_brand_id'))
                                        ->get()
                                        ->mapWithKeys(fn($model) => [
                                            $model->id => "{$model->name} ({$model->generation}, {$model->year} г.)"
                                        ])
                                )
                                ->required(),


                            TextInput::make('vin')
                                ->label('VIN-номер')
                                ->unique(table: 'client_cars', column: 'vin', ignoreRecord: true)
                                ->minLength(17)
                                ->maxLength(17)
                                ->validationMessages([
                                    'minLength' => 'Длина VIN-номера не может быть меньше 17 символов.',
                                    'maxLength' => 'Длина VIN-номера не может быть больше 17 символов.'
                                ])
                                ->required(),

                            TextInput::make('number_plate')
                                ->label('Гос. номер')
                                ->unique(table: 'client_cars', column: 'number_plate', ignoreRecord: true)
                                ->required(),

                            TextInput::make('mileage')
                                ->label('Пробег (км)')
                                ->numeric()
                                ->minValue(0)
                                ->required(),

                            TextInput::make('color')
                                ->label('Цвет автомобиля')
                                ->required(),
                        ])
                        ->minItems(1)
                        ->collapsible(),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('last_name')->label('Фамилия')->searchable(),
                Tables\Columns\TextColumn::make('first_name')->label('Имя')->searchable(),
                Tables\Columns\TextColumn::make('phone')->label('Телефон')->searchable(),

                Tables\Columns\TextColumn::make('cars.model.name')
                    ->label('Автомобили')
                    ->formatStateUsing(
                        fn($record) =>
                        $record->cars->map(
                            fn($car) =>
                            "{$car->brand->name} {$car->model->name} ({$car->color}, {$car->mileage} км)"
                        )->join(', ')
                    )
                    ->sortable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListClients::route('/'),
            'create' => Pages\CreateClient::route('/create'),
            'edit' => Pages\EditClient::route('/{record}/edit'),
        ];
    }
}
