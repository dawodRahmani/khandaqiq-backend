<?php

namespace App\Filament\Resources\ContactUsPages\Pages;

use App\Filament\Resources\ContactUsPages\ContactUsPageResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditContactUsPage extends EditRecord
{
    protected static string $resource = ContactUsPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
