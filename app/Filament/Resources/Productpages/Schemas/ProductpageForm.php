<?php

namespace App\Filament\Resources\Productpages\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;

class ProductpageForm
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

                Section::make('Slides')
                    ->schema([
                        TextInput::make('slide_title_1')->required(),
                        Textarea::make('slide_subtitle_1')->required()->columnSpanFull(),
                        FileUpload::make('slide_image_1')
                            ->image()
                            ->required()
                            ->disk('public')
                            ->directory('product-pages')
                            ->visibility('public'),
                        TextInput::make('slide_title_2')->default(null),
                        Textarea::make('slide_subtitle_2')->default(null)->columnSpanFull(),
                        FileUpload::make('slide_image_2')
                            ->image()
                            ->disk('public')
                            ->directory('product-pages')
                            ->visibility('public'),
                        TextInput::make('slide_title_3')->default(null),
                        Textarea::make('slide_subtitle_3')->default(null)->columnSpanFull(),
                        FileUpload::make('slide_image_3')
                            ->image()
                            ->disk('public')
                            ->directory('product-pages')
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
