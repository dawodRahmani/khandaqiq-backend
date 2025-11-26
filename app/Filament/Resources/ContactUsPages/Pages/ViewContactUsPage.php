<?php

namespace App\Filament\Resources\ContactUsPages\Pages;

use App\Filament\Resources\ContactUsPages\ContactUsPageResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewContactUsPage extends ViewRecord
{
    protected static string $resource = ContactUsPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
