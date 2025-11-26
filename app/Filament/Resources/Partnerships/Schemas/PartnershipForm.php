<?php

namespace App\Filament\Resources\Partnerships\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;

class PartnershipForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Logo')
                    ->schema([
                        FileUpload::make('logo_image')
                            ->image()
                            ->disk('public')
                            ->directory('partnerships')
                            ->visibility('public')
                            ->required(),
                    ])
                    ->columnSpanFull(),

                Section::make('Settings')
                    ->schema([
                        TextInput::make('link')->required(),
                    ])
                    ->columnSpanFull(),
            ]);
    }
}
