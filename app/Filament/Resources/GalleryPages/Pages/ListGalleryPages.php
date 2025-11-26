<?php

namespace App\Filament\Resources\GalleryPages\Pages;

use App\Filament\Resources\GalleryPages\GalleryPageResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListGalleryPages extends ListRecords
{
    protected static string $resource = GalleryPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
