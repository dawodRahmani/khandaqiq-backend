<?php

namespace App\Filament\Resources\Petroleums\Pages;

use App\Filament\Resources\Petroleums\PetroleumResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPetroleum extends ViewRecord
{
    protected static string $resource = PetroleumResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
