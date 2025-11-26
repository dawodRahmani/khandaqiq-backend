<?php

namespace App\Filament\Resources\Inevesmentoprations\Pages;

use App\Filament\Resources\Inevesmentoprations\InevesmentoprationResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListInevesmentoprations extends ListRecords
{
    protected static string $resource = InevesmentoprationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
