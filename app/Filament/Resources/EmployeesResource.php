<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Employees;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\EmployeesResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\EmployeesResource\RelationManagers;

class EmployeesResource extends Resource
{
    protected static ?string $model = Employees::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('name')->required(),
                        TextInput::make('location_code')->required(),
                        DatePicker::make('birth_date')->required()
                                    ->placeholder('YYYY-MM-DD'),

                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->sortable()->searchable(),
                TextColumn::make('location_code')->sortable()->searchable(),
                TextColumn::make('birth_date')->sortable()->searchable(),
                ])
            ->filters([
                Filter::make('age')
                ->form([
                    TextInput::make('age')
                        ->label('Age')
                ])
                ->query(function (Builder $query, array $data) {
                    if ($data['age']) {
                        return $query->age($data['age']);
                    }

                    return $query;
                }),
                
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListEmployees::route('/'),
            'create' => Pages\CreateEmployees::route('/create'),
            'edit' => Pages\EditEmployees::route('/{record}/edit'),
        ];
    }    
}
