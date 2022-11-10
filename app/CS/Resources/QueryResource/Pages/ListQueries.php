<?php

namespace App\CS\Resources\QueryResource\Pages;

use App\CS\Resources\QueryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListQueries extends ListRecords
{
    protected static string $resource = QueryResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
