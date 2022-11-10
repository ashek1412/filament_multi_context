<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EscalationMatrixResource\Pages;
use App\Filament\Resources\EscalationMatrixResource\RelationManagers;
use App\Models\EscalationDepartment;
use App\Models\EscalationMatrix;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EscalationMatrixResource extends Resource
{
    protected static ?string $model = EscalationMatrix::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationLabel = 'Escalation Matrix';



    public static function form(Form $form): Form
    {

        return $form
            ->schema([
                    Select::make('department_id')
                    ->required()
                    ->columnSpan(2)
                    ->label('Department')
                    ->options(EscalationDepartment::all()->pluck('department', 'id'))
                    ->searchable(),


                 Fieldset::make('First Request')
                     ->schema([

                         Select::make('first_step_user')
                             ->label('status')
                             ->options([
                                 'user' => 'User',
                                 'Supervisor/Manager' => 'Supervisor/Manager',
                                 'Head of the Dept.' => 'Head of the Dept.',
                                 'CEO' => 'CEO',
                             ]),
                         TextInput::make('first_step_emials')->label('emails')->columnSpan(2),

                         TextInput::make('first_step_time')
                             ->label('Response due time')
                             ->numeric()
                             ->minValue(1)
                             ->maxValue(12)
                     ])->columns(4),
                Fieldset::make('First Escalation')
                    ->schema([

                        Select::make('second_step_user')
                            ->label('status')
                            ->options([
                                'user' => 'User',
                                'Supervisor/Manager' => 'Supervisor/Manager',
                                'Head of the Dept.' => 'Head of the Dept.',
                                'CEO' => 'CEO',
                            ]),
                        TextInput::make('second_step_emials')->label('emails')->columnSpan(2),

                        TextInput::make('second_step_time')
                            ->label('Response due time')
                            ->numeric()
                            ->minValue(1)
                            ->maxValue(12)
                    ])->columns(4),
                Fieldset::make('Second Escalation')
                    ->schema([

                        Select::make('third_step_user')
                            ->label('status')
                            ->options([
                                'user' => 'User',
                                'Supervisor/Manager' => 'Supervisor/Manager',
                                'Head of the Dept.' => 'Head of the Dept.',
                                'CEO' => 'CEO',
                            ]),
                        TextInput::make('third_step_emials')->label('emails')->columnSpan(2),
                        TextInput::make('third_step_time')
                            ->label('Response due time')
                            ->numeric()
                            ->minValue(1)
                            ->maxValue(12)
                    ])->columns(4),

                Fieldset::make('Third Escalation')
                    ->schema([

                        Select::make('fourth_step_user')
                            ->label('status')
                            ->options([
                                'user' => 'User',
                                'Supervisor/Manager' => 'Supervisor/Manager',
                                'Head of the Dept.' => 'Head of the Dept.',
                                'CEO' => 'CEO',
                            ]),
                        TextInput::make('fourth_step_emials')->label('emails')->columnSpan(2),

                        TextInput::make('fourth_step_time')
                            ->label('Response due time')
                            ->numeric()
                            ->minValue(1)
                            ->maxValue(12)
                    ])->columns(4)

                   ],


            );

    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make("escalationdepartment.department")->label("Department"),
                TextColumn::make("created_at")

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
            'index' => Pages\ListEscalationMatrices::route('/'),
            'create' => Pages\CreateEscalationMatrix::route('/create'),
            'edit' => Pages\EditEscalationMatrix::route('/{record}/edit'),
        ];
    }
}
