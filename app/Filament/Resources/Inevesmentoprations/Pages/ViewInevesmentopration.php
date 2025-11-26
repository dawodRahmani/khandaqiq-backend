<?php

namespace App\Filament\Resources\Inevesmentoprations\Pages;

use App\Filament\Resources\Inevesmentoprations\InevesmentoprationResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewInevesmentopration extends ViewRecord
{
    protected static string $resource = InevesmentoprationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
