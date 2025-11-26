<?php

namespace App\Filament\Resources\Newspages\Pages;

use App\Filament\Resources\Newspages\NewspageResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListNewspages extends ListRecords
{
    protected static string $resource = NewspageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
