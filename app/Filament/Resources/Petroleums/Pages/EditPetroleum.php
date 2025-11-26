<?php

namespace App\Filament\Resources\Petroleums\Pages;

use App\Filament\Resources\Petroleums\PetroleumResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditPetroleum extends EditRecord
{
    protected static string $resource = PetroleumResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
