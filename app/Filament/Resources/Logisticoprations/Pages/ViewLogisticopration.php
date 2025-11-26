<?php

namespace App\Filament\Resources\Logisticoprations\Pages;

use App\Filament\Resources\Logisticoprations\LogisticoprationResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewLogisticopration extends ViewRecord
{
    protected static string $resource = LogisticoprationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
