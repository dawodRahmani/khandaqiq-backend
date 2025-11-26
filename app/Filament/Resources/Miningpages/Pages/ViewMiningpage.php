<?php

namespace App\Filament\Resources\Miningpages\Pages;

use App\Filament\Resources\Miningpages\MiningpageResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewMiningpage extends ViewRecord
{
    protected static string $resource = MiningpageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
