<?php

namespace App\Filament\Resources\Servicespages\Pages;

use App\Filament\Resources\Servicespages\ServicespageResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewServicespage extends ViewRecord
{
    protected static string $resource = ServicespageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
