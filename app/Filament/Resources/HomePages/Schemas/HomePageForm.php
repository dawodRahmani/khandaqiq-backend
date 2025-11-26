<?php

namespace App\Filament\Resources\HomePages\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;

class HomePageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('setting')
                    ->schema([
                        Select::make('language_id')
                            ->label('Language')
                            ->required()
                            ->relationship('language', 'name')
                            ->unique(ignoreRecord: true),
                        TextInput::make('sector_message')
                            ->required(),
                        TextInput::make('sort')
                            ->required()
                            ->numeric()
                            ->default(0),
                    ])
                     ->columnSpanFull(),
                    //  ...............................
                Section::make('slide 1')
                    ->schema([
                        TextInput::make('slide_title_1')
                            ->required(),
                        Textarea::make('slide_subtitle_1')
                            ->required()
                            ->columnSpanFull(),
                        FileUpload::make('slide_image_1')
                            ->image()
                            ->disk('public')
                            ->directory('home-pages')
                            ->visibility('public')
                            ->required(),

                    ])
                     ->columnSpanFull(),
                    //  ...............................
                Section::make('slide 2')
                    ->schema([
                        TextInput::make('slide_title_2')
                            ->default(null),
                        Textarea::make('slide_subtitle_2')
                            ->default(null)
                            ->columnSpanFull(),
                        FileUpload::make('slide_image_2')
                            ->image()
                            ->disk('public')
                            ->directory('home-pages')
                            ->visibility('public'),

                    ])
                     ->columnSpanFull(),
                     //  ...............................
                Section::make('slide 3')
                    ->schema([
                        TextInput::make('slide_title_3')
                            ->default(null),
                        Textarea::make('slide_subtitle_3')
                            ->default(null)
                            ->columnSpanFull(),
                        FileUpload::make('slide_image_3')
                            ->image()
                            ->disk('public')
                            ->directory('home-pages')
                            ->visibility('public'),
                    ])
                     ->columnSpanFull(),
                 //  ...............................

                Section::make('about us')
                    ->schema([

                        TextInput::make('about_title')
                            ->required(),
                        FileUpload::make('about_image')
                            ->image()
                            ->disk('public')
                            ->directory('home-pages')
                            ->visibility('public')
                            ->required(),
                        Textarea::make('about_message')
                            ->required()
                            ->columnSpanFull(),
                    ])
                     ->columnSpanFull(),
                     //............................
                    ]);
    }
}
