<?php

namespace App\Filament\Resources\GalleryPages\Pages;

use App\Filament\Resources\GalleryPages\GalleryPageResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditGalleryPage extends EditRecord
{
    protected static string $resource = GalleryPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
