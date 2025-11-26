<?php

namespace App\Filament\Resources\LocationMaps\Pages;

use App\Filament\Resources\LocationMaps\LocationMapResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewLocationMap extends ViewRecord
{
    protected static string $resource = LocationMapResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
