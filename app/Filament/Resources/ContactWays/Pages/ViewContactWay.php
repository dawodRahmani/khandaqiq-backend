<?php

namespace App\Filament\Resources\ContactWays\Pages;

use App\Filament\Resources\ContactWays\ContactWayResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewContactWay extends ViewRecord
{
    protected static string $resource = ContactWayResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
