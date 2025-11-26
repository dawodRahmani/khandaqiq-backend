<?php

namespace App\Filament\Resources\Languages\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;

class LanguageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Basic')
                    ->schema([
                        TextInput::make('name')->required(),
                        TextInput::make('code')->required(),
                        Select::make('direction')->options(['rtl' => 'Rtl', 'ltr' => 'Ltr'])->default('ltr')->required(),
                    ])
                    ->columnSpanFull(),

                Section::make('Settings')
                    ->schema([
                        Toggle::make('is_active')->required(),
                    ])
                    ->columnSpanFull(),
            ]);
    }
}
