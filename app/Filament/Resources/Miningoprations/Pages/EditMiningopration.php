<?php

namespace App\Filament\Resources\Miningoprations\Pages;

use App\Filament\Resources\Miningoprations\MiningoprationResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditMiningopration extends EditRecord
{
    protected static string $resource = MiningoprationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
