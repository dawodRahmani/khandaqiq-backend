<?php

namespace App\Filament\Resources\ContactWays\Pages;

use App\Filament\Resources\ContactWays\ContactWayResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditContactWay extends EditRecord
{
    protected static string $resource = ContactWayResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
