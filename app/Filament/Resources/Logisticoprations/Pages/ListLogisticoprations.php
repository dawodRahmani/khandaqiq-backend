<?php

namespace App\Filament\Resources\Logisticoprations\Pages;

use App\Filament\Resources\Logisticoprations\LogisticoprationResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListLogisticoprations extends ListRecords
{
    protected static string $resource = LogisticoprationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
