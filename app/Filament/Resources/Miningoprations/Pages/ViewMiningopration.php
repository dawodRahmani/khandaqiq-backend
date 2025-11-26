<?php

namespace App\Filament\Resources\Miningoprations\Pages;

use App\Filament\Resources\Miningoprations\MiningoprationResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewMiningopration extends ViewRecord
{
    protected static string $resource = MiningoprationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
