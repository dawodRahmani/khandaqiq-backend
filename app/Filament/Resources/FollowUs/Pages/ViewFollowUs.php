<?php

namespace App\Filament\Resources\FollowUs\Pages;

use App\Filament\Resources\FollowUs\FollowUsResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewFollowUs extends ViewRecord
{
    protected static string $resource = FollowUsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
