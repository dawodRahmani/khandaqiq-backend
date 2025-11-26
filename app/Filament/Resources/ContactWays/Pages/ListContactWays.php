<?php

namespace App\Filament\Resources\ContactWays\Pages;

use App\Filament\Resources\ContactWays\ContactWayResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListContactWays extends ListRecords
{
    protected static string $resource = ContactWayResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
