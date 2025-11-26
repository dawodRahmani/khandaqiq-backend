<?php

namespace App\Filament\Resources\Servicespages\Pages;

use App\Filament\Resources\Servicespages\ServicespageResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListServicespages extends ListRecords
{
    protected static string $resource = ServicespageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
