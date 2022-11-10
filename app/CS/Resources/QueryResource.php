<?php

namespace App\CS\Resources;

use App\CS\Resources\QueryResource\Pages;
use App\CS\Resources\QueryResource\RelationManagers;
use App\Models\Query;
use App\Models\QueryType;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Artificertech\FilamentMultiContext\Concerns\ContextualResource;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;

class QueryResource extends Resource
{
    use ContextualResource;
    protected static ?string $model = Query::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('query_type_id')
                    ->label('Query Type')
                    ->options(QueryType::all()->pluck('type_name', 'id'))
                    ->required(),
                TextInput::make('customer_name')
                    ->required(),
                TextInput::make('phone'),
                TextInput::make('description')->required(),
                TextInput::make('tracking_no')->label('Tracking numbers'),

            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('type'),
                TextColumn::make('description'),
                TextColumn::make("escalationdepartment.department")->label("Department"),
                TextColumn::make("created_at")->label("Date and Time"),
                TextColumn::make("status"),

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
            'index' => \App\CS\Resources\QueryResource\Pages\ListQueries::route('/'),
            'create' => \App\CS\Resources\QueryResource\Pages\CreateQuery::route('/create'),
            'edit' => \App\CS\Resources\QueryResource\Pages\EditQuery::route('/{record}/edit'),
        ];
    }


    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['created_by'] = auth()->id();

        return $data;
    }

}
