<?php

namespace App\Filament\Resources\LocationMaps\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;

class LocationMapForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([



                // ================= Location Details Section =================
                Section::make('Location Details')
                    ->schema([
                        TextInput::make('title')->default(null),
                TextInput::make('latitude')
                    ->numeric()
                    ->rules(['between:-90,90'])
                    ->required(),

                TextInput::make('longitude')
                    ->numeric()
                    ->rules(['between:-180,180'])
                    ->required(),


                        TextInput::make('address')->default(null),
                    ])
                    ->columnSpanFull(),

            ]);
    }
}
