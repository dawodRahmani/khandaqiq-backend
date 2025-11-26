<?php

namespace App\Filament\Resources\News\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;

class NewsForm
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

                Section::make('Content')
                    ->schema([
                        TextInput::make('title')->required(),
                        Textarea::make('new')->required()->columnSpanFull(),
                        Toggle::make('important')->required(),
                        FileUpload::make('image')->image()->required(),
                        TextInput::make('link')->default(null),
                        DatePicker::make('date')->required(),
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
