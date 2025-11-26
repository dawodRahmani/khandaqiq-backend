<?php

namespace App\Filament\Resources\Inevesments\Pages;

use App\Filament\Resources\Inevesments\InevesmentResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListInevesments extends ListRecords
{
    protected static string $resource = InevesmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
