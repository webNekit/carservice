<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CarBrandResource\Pages;
use App\Filament\Resources\CarBrandResource\RelationManagers;
use App\Models\CarBrand;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CarBrandResource extends Resource
{
    protected static ?string $model = CarBrand::class;

    protected static ?string $navigationIcon = 'heroicon-o-circle-stack';

    protected static ?string $navigationGroup = 'База автомобилей';

    protected static ?string $navigationLabel = "Марки автомобилей";

    protected static ?int $navigationSort = 1;

    protected static ?string $modelLabel = "";

    protected static ?string $pluralLabel = "Марки";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()->schema([
                    Forms\Components\TextInput::make('name')
                        ->label('Марка автомобиля')
                        ->unique(ignoreRecord: true)
                        ->required()
                        ->validationMessages([
                            'required' => 'Название марки автомобиля обязательно для заполнения.',
                            'unique' => 'Такая марка уже существует. Пожалуйста, введите другую.',
                        ]),
                ])->columns(2),
            ]);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Марка автомобиля')
                    ->searchable(),
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
                //
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
            'index' => Pages\ListCarBrands::route('/'),
            'create' => Pages\CreateCarBrand::route('/create'),
            'edit' => Pages\EditCarBrand::route('/{record}/edit'),
        ];
    }
}
