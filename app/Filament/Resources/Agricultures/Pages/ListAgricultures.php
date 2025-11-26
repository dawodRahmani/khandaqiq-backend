<?php

namespace App\Filament\Resources\Agricultures\Pages;

use App\Filament\Resources\Agricultures\AgricultureResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAgricultures extends ListRecords
{
    protected static string $resource = AgricultureResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
