<?php

namespace App\Filament\Resources\EscalationMatrixResource\Pages;

use App\Filament\Resources\EscalationMatrixResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEscalationMatrices extends ListRecords
{
    protected static string $resource = EscalationMatrixResource::class;

    protected static ?string $title = 'Escalation Matrix';

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
