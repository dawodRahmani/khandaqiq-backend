<?php

namespace App\Filament\Resources\Agricultures\Pages;

use App\Filament\Resources\Agricultures\AgricultureResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditAgriculture extends EditRecord
{
    protected static string $resource = AgricultureResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
