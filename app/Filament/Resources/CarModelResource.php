<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CarModelResource\Pages;
use App\Filament\Resources\CarModelResource\RelationManagers;
use App\Models\CarBrand;
use App\Models\CarModel;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CarModelResource extends Resource
{
    protected static ?string $model = CarModel::class;

    protected static ?string $navigationIcon = 'heroicon-o-circle-stack';

    protected static ?string $navigationGroup = 'База автомобилей';

    protected static ?string $navigationLabel = "Модели автомобилей";

    protected static ?int $navigationSort = 2;

    protected static ?string $modelLabel = "";

    protected static ?string $pluralLabel = "Модели";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Информация о модели')->schema([
                    Forms\Components\TextInput::make('name')
                        ->label('Модель автомобиля')
                        ->required(),
                    Forms\Components\TextInput::make('generation')
                        ->label('Поколение автомобиля')
                        ->required(),
                    Forms\Components\TextInput::make('year')
                        ->label('Год выпуска')
                        ->required()
                        ->numeric(),
                ])->columnSpan(2),
                Section::make('Марка автомобиля')->schema([
                    Select::make('brand_id')
                        ->label('Выберите марку автомобиля')
                        ->options(CarBrand::all()->pluck('name', 'id'))
                        ->searchable()
                        ->required(),
                ])->columnSpan(1),
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('brand.name')
                    ->label('Марка')
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->label('Модель автомобиля')
                    ->searchable(),
                Tables\Columns\TextColumn::make('generation')
                    ->label('Поколение')
                    ->searchable(),
                Tables\Columns\TextColumn::make('year')
                    ->label('Год выпуска')
                    ->numeric()
                    ->sortable()
                    ->formatStateUsing(fn(string $state): string => "{$state} г."),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('brand_id')
                    ->searchable()
                    ->label('Фильтр по марке автомобиля')
                    ->options(CarBrand::all()->pluck('name', 'id'))
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
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCarModels::route('/'),
            'create' => Pages\CreateCarModel::route('/create'),
            'edit' => Pages\EditCarModel::route('/{record}/edit'),
        ];
    }
}
