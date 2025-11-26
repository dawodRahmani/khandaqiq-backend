<?php

namespace App\Filament\Resources\FollowUs\Pages;

use App\Filament\Resources\FollowUs\FollowUsResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditFollowUs extends EditRecord
{
    protected static string $resource = FollowUsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
