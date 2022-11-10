<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EscalationDepartmentResource\Pages;
use App\Filament\Resources\EscalationDepartmentResource\RelationManagers;
use App\Models\EscalationDepartment;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EscalationDepartmentResource extends Resource
{
    protected static ?string $model = EscalationDepartment::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('department')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListEscalationDepartments::route('/'),
            'create' => Pages\CreateEscalationDepartment::route('/create'),
            'edit' => Pages\EditEscalationDepartment::route('/{record}/edit'),
        ];
    }
}
