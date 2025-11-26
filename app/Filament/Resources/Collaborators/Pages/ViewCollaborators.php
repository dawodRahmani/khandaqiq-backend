<?php

namespace App\Filament\Resources\Collaborators\Pages;

use App\Filament\Resources\Collaborators\CollaboratorsResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewCollaborators extends ViewRecord
{
    protected static string $resource = CollaboratorsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
