<?php

namespace App\Filament\Resources\HrPages\Pages;

use App\Filament\Resources\HrPages\HrPageResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditHrPage extends EditRecord
{
    protected static string $resource = HrPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
