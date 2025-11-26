<?php

namespace App\Filament\Resources\LocationMaps\Pages;

use App\Filament\Resources\LocationMaps\LocationMapResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListLocationMaps extends ListRecords
{
    protected static string $resource = LocationMapResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
