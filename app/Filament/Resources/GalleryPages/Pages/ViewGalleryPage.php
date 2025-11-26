<?php

namespace App\Filament\Resources\GalleryPages\Pages;

use App\Filament\Resources\GalleryPages\GalleryPageResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewGalleryPage extends ViewRecord
{
    protected static string $resource = GalleryPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
