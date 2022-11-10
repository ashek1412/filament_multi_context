<?php

namespace App\CS\Resources\QueryResource\Pages;
use Artificertech\FilamentMultiContext\Concerns\ContextualPage;
use App\CS\Resources\QueryResource;
use Filament\Resources\Pages\CreateRecord;

class CreateQuery extends CreateRecord
{
    use ContextualPage;
    protected static string $resource = QueryResource::class;

}


