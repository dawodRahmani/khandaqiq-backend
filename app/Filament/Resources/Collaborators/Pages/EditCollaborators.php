<?php

namespace App\Filament\Resources\Collaborators\Pages;

use App\Filament\Resources\Collaborators\CollaboratorsResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditCollaborators extends EditRecord
{
    protected static string $resource = CollaboratorsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
