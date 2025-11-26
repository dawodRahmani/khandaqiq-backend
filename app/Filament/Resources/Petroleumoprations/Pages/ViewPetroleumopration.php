<?php

namespace App\Filament\Resources\Petroleumoprations\Pages;

use App\Filament\Resources\Petroleumoprations\PetroleumoprationResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPetroleumopration extends ViewRecord
{
    protected static string $resource = PetroleumoprationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
