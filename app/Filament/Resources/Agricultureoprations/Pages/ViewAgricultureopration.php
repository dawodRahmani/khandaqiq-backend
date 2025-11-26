<?php

namespace App\Filament\Resources\Agricultureoprations\Pages;

use App\Filament\Resources\Agricultureoprations\AgricultureoprationResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewAgricultureopration extends ViewRecord
{
    protected static string $resource = AgricultureoprationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
