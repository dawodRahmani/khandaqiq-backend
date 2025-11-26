<?php

namespace App\Filament\Resources\Miningpages\Pages;

use App\Filament\Resources\Miningpages\MiningpageResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMiningpages extends ListRecords
{
    protected static string $resource = MiningpageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
