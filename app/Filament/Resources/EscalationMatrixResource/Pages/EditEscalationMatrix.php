<?php

namespace App\Filament\Resources\EscalationMatrixResource\Pages;

use App\Filament\Resources\EscalationMatrixResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEscalationMatrix extends EditRecord
{
    protected static string $resource = EscalationMatrixResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
