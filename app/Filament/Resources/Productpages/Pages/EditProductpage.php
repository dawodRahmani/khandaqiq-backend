<?php

namespace App\Filament\Resources\Productpages\Pages;

use App\Filament\Resources\Productpages\ProductpageResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditProductpage extends EditRecord
{
    protected static string $resource = ProductpageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
