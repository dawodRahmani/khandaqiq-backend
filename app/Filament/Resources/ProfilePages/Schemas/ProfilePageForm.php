<?php

namespace App\Filament\Resources\ProfilePages\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;

class ProfilePageForm
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

                // ================= Hero Section =================
                Section::make('Hero Section')
                    ->schema([
                        FileUpload::make('hero_image')
                            ->image()
                            ->label('Hero Background Image'),
                        TextInput::make('hero_subtitle')
                            ->label('Hero Subtitle')
                            ->columnSpanFull(),
                    ])
                    ->columnSpanFull(),

                // ================= About Section =================
                Section::make('About Section')
                    ->schema([
                        TextInput::make('about_title')
                            ->label('About Title'),
                        Textarea::make('about_message')
                            ->label('About Message')
                            ->rows(4)
                            ->columnSpanFull(),
                    ])
                    ->columnSpanFull(),

                // ================= Section Titles =================
                Section::make('Section Titles')
                    ->schema([
                        TextInput::make('profiles_title')
                            ->label('Profiles Section Title'),
                        TextInput::make('reports_title')
                            ->label('Reports Section Title'),
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
