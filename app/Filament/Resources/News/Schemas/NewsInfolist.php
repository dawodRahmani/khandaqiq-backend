<?php

namespace App\Filament\Resources\News\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;

class NewsInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Language')
                    ->schema([
                        TextEntry::make('language.name')->label('Language'),
                    ])
                    ->columnSpanFull(),

                Section::make('Content')
                    ->schema([
                        TextEntry::make('title'),
                        TextEntry::make('new')->columnSpanFull(),
                        IconEntry::make('important')->boolean(),
                        ImageEntry::make('image'),
                        TextEntry::make('link')->placeholder('-'),
                        TextEntry::make('date')->date(),
                    ])
                    ->columnSpanFull(),

                Section::make('Settings')
                    ->schema([
                        TextEntry::make('sort')->numeric(),
                    ])
                    ->columnSpanFull(),

                Section::make('Timestamps')
                    ->schema([
                        TextEntry::make('created_at')->dateTime()->placeholder('-'),
                        TextEntry::make('updated_at')->dateTime()->placeholder('-'),
                    ])
                    ->columnSpanFull(),
            ]);
    }
}
