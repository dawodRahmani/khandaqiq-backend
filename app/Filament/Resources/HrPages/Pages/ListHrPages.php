<?php

namespace App\Filament\Resources\HrPages\Pages;

use App\Filament\Resources\HrPages\HrPageResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListHrPages extends ListRecords
{
    protected static string $resource = HrPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
