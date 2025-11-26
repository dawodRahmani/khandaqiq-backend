<?php

namespace App\Filament\Resources\Servicespages\Pages;

use App\Filament\Resources\Servicespages\ServicespageResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditServicespage extends EditRecord
{
    protected static string $resource = ServicespageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
