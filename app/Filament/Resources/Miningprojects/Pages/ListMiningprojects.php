<?php

namespace App\Filament\Resources\Miningprojects\Pages;

use App\Filament\Resources\Miningprojects\MiningprojectResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMiningprojects extends ListRecords
{
    protected static string $resource = MiningprojectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
