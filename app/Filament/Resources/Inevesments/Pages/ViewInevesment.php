<?php

namespace App\Filament\Resources\Inevesments\Pages;

use App\Filament\Resources\Inevesments\InevesmentResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewInevesment extends ViewRecord
{
    protected static string $resource = InevesmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
