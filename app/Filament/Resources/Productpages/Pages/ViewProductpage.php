<?php

namespace App\Filament\Resources\Productpages\Pages;

use App\Filament\Resources\Productpages\ProductpageResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewProductpage extends ViewRecord
{
    protected static string $resource = ProductpageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
