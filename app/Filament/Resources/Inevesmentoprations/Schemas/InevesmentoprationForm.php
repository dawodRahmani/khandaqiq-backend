<?php

namespace App\Filament\Resources\Inevesmentoprations\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;

class InevesmentoprationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                // ================= Language Section =================
                Section::make('Language')
                    ->schema([
                        Select::make('language_id')
                            ->label('Language')
                            ->relationship('language', 'name')
                            ->required(),
                    ])
                    ->columnSpanFull(),

                // ================= Main Info Section =================
                Section::make('Operation Details')
                    ->schema([
                        TextInput::make('title')->required(),
                        Toggle::make('important')->required(),
                        Textarea::make('description')->required()->columnSpanFull(),
                        FileUpload::make('image')->image()->required(),
                    ])
                    ->columnSpanFull(),

                // ================= Settings Section =================
                Section::make('Settings')
                    ->schema([
                        TextInput::make('sort')->required()->numeric()->default(0),
                    ])
                    ->columnSpanFull(),

            ]);
    }
}
