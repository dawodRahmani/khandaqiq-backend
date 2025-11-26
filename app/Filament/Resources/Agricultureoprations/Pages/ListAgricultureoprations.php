<?php

namespace App\Filament\Resources\Agricultureoprations\Pages;

use App\Filament\Resources\Agricultureoprations\AgricultureoprationResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAgricultureoprations extends ListRecords
{
    protected static string $resource = AgricultureoprationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
