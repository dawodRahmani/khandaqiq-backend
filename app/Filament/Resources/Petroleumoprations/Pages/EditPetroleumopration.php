<?php

namespace App\Filament\Resources\Petroleumoprations\Pages;

use App\Filament\Resources\Petroleumoprations\PetroleumoprationResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditPetroleumopration extends EditRecord
{
    protected static string $resource = PetroleumoprationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
