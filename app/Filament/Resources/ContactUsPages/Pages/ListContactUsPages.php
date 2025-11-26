<?php

namespace App\Filament\Resources\ContactUsPages\Pages;

use App\Filament\Resources\ContactUsPages\ContactUsPageResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListContactUsPages extends ListRecords
{
    protected static string $resource = ContactUsPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
