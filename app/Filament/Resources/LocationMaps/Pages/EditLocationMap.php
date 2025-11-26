<?php

namespace App\Filament\Resources\LocationMaps\Pages;

use App\Filament\Resources\LocationMaps\LocationMapResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditLocationMap extends EditRecord
{
    protected static string $resource = LocationMapResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
