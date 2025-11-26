<?php

namespace App\Filament\Resources\QuickAccesses\Pages;

use App\Filament\Resources\QuickAccesses\QuickAccessResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditQuickAccess extends EditRecord
{
    protected static string $resource = QuickAccessResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
