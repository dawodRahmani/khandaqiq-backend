<?php

namespace App\Filament\Resources\Newspages\Pages;

use App\Filament\Resources\Newspages\NewspageResource;
use Filament\Resources\Pages\CreateRecord;

class CreateNewspage extends CreateRecord
{
    protected static string $resource = NewspageResource::class;
}
