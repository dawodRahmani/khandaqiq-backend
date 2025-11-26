<?php

namespace App\Filament\Resources\Miningprojects\Pages;

use App\Filament\Resources\Miningprojects\MiningprojectResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewMiningproject extends ViewRecord
{
    protected static string $resource = MiningprojectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
