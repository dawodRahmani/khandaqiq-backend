<?php

namespace App\Filament\Resources\Agricultureoprations\Pages;

use App\Filament\Resources\Agricultureoprations\AgricultureoprationResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditAgricultureopration extends EditRecord
{
    protected static string $resource = AgricultureoprationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
