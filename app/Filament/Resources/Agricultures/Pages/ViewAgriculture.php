<?php

namespace App\Filament\Resources\Agricultures\Pages;

use App\Filament\Resources\Agricultures\AgricultureResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewAgriculture extends ViewRecord
{
    protected static string $resource = AgricultureResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
