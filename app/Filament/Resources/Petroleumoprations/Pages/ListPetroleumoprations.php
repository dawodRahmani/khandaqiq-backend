<?php

namespace App\Filament\Resources\Petroleumoprations\Pages;

use App\Filament\Resources\Petroleumoprations\PetroleumoprationResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPetroleumoprations extends ListRecords
{
    protected static string $resource = PetroleumoprationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
