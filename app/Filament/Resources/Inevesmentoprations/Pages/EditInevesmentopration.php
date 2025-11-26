<?php

namespace App\Filament\Resources\Inevesmentoprations\Pages;

use App\Filament\Resources\Inevesmentoprations\InevesmentoprationResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditInevesmentopration extends EditRecord
{
    protected static string $resource = InevesmentoprationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
