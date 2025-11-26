<?php

namespace App\Filament\Resources\Newspages\Pages;

use App\Filament\Resources\Newspages\NewspageResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewNewspage extends ViewRecord
{
    protected static string $resource = NewspageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
