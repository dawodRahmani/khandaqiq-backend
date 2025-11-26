<?php

namespace App\Filament\Resources\Productpages\Pages;

use App\Filament\Resources\Productpages\ProductpageResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListProductpages extends ListRecords
{
    protected static string $resource = ProductpageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
