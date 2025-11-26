<?php

namespace App\Filament\Resources\FollowUs\Pages;

use App\Filament\Resources\FollowUs\FollowUsResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListFollowUs extends ListRecords
{
    protected static string $resource = FollowUsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
