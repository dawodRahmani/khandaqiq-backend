<?php

namespace App\Filament\Resources\Miningpages\Pages;

use App\Filament\Resources\Miningpages\MiningpageResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditMiningpage extends EditRecord
{
    protected static string $resource = MiningpageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
