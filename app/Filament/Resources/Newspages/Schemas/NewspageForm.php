<?php

namespace App\Filament\Resources\Newspages\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;

class NewspageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Language')
                    ->schema([
                        Select::make('language_id')->label('Language')->required()->relationship('language', 'name'),
                    ])
                    ->columnSpanFull(),

                Section::make('Slide 1')
                    ->schema([
                        TextInput::make('slide_title_1')->required(),
                        Textarea::make('slide_subtitle_1')->required()->columnSpanFull(),
                        FileUpload::make('slide_image_1')
                            ->image()
                            ->disk('public')
                            ->directory('news-pages')
                            ->visibility('public')
                            ->required(),
                    ])
                    ->columnSpanFull(),

                Section::make('Slide 2')
                    ->schema([
                        TextInput::make('slide_title_2')->default(null),
                        Textarea::make('slide_subtitle_2')->default(null)->columnSpanFull(),
                        FileUpload::make('slide_image_2')
                            ->image()
                            ->disk('public')
                            ->directory('news-pages')
                            ->visibility('public'),
                    ])
                    ->columnSpanFull(),

                Section::make('Slide 3')
                    ->schema([
                        TextInput::make('slide_title_3')->default(null),
                        Textarea::make('slide_subtitle_3')->default(null)->columnSpanFull(),
                        FileUpload::make('slide_image_3')
                            ->image()
                            ->disk('public')
                            ->directory('news-pages')
                            ->visibility('public'),
                    ])
                    ->columnSpanFull(),

                Section::make('Settings')
                    ->schema([
                        TextInput::make('sort')->required()->numeric()->default(0),
                    ])
                    ->columnSpanFull(),
            ]);
    }
}
