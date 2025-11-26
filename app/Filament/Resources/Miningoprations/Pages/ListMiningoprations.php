<?php

namespace App\Filament\Resources\Miningoprations\Pages;

use App\Filament\Resources\Miningoprations\MiningoprationResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMiningoprations extends ListRecords
{
    protected static string $resource = MiningoprationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
