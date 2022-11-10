<?php

namespace App\CS\Resources\QueryResource\Pages;
use Artificertech\FilamentMultiContext\Concerns\ContextualPage;
use App\CS\Resources\QueryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditQuery extends EditRecord
{
    use ContextualPage;
    protected static string $resource = QueryResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
