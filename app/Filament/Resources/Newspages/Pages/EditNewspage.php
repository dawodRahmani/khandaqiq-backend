<?php

namespace App\Filament\Resources\Newspages\Pages;

use App\Filament\Resources\Newspages\NewspageResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditNewspage extends EditRecord
{
    protected static string $resource = NewspageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
