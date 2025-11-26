<?php

namespace App\Filament\Resources\QuickAccesses\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class QuickAccessForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('link')
                    ->required(),
            ]);
    }
}
