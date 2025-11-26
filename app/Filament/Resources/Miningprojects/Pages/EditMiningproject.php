<?php

namespace App\Filament\Resources\Miningprojects\Pages;

use App\Filament\Resources\Miningprojects\MiningprojectResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditMiningproject extends EditRecord
{
    protected static string $resource = MiningprojectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
