<?php

namespace App\Filament\Resources\Petroleums\Pages;

use App\Filament\Resources\Petroleums\PetroleumResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPetroleums extends ListRecords
{
    protected static string $resource = PetroleumResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
