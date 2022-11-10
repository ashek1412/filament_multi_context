<?php

namespace App\Filament\Resources\EscalationDepartmentResource\Pages;

use App\Filament\Resources\EscalationDepartmentResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEscalationDepartments extends ListRecords
{
    protected static string $resource = EscalationDepartmentResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
