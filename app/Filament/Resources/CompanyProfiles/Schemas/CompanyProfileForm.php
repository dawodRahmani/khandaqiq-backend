<?php

namespace App\Filament\Resources\CompanyProfiles\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;

class CompanyProfileForm
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

                // ================= Profile Info Section =================
                Section::make('Profile Information')
                    ->schema([
                        TextInput::make('title')
                            ->label('Title')
                            ->required(),
                        FileUpload::make('thumbnail')
                            ->image()
                            ->label('Thumbnail Image'),
                        FileUpload::make('file')
                            ->label('Profile File (PDF)')
                            ->acceptedFileTypes(['application/pdf'])
                            ->directory('company-profiles'),
                    ])
                    ->columnSpanFull(),

                // ================= Settings Section =================
                Section::make('Settings')
                    ->schema([
                        TextInput::make('sort')
                            ->required()
                            ->numeric()
                            ->default(0),
                    ])
                    ->columnSpanFull(),

            ]);
    }
}
