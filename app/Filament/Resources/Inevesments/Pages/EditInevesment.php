<?php

namespace App\Filament\Resources\Inevesments\Pages;

use App\Filament\Resources\Inevesments\InevesmentResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditInevesment extends EditRecord
{
    protected static string $resource = InevesmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
