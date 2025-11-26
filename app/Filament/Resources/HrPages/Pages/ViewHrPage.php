<?php

namespace App\Filament\Resources\HrPages\Pages;

use App\Filament\Resources\HrPages\HrPageResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewHrPage extends ViewRecord
{
    protected static string $resource = HrPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
