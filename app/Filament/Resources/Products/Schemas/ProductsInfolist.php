<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;

class ProductsInfolist
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

                Section::make('Basic')
                    ->schema([
                        TextEntry::make('title'),
                        IconEntry::make('important')->boolean(),
                        TextEntry::make('type')->badge(),
                    ])
                    ->columnSpanFull(),

                Section::make('Description & Pricing')
                    ->schema([
                        TextEntry::make('description')->columnSpanFull(),
                        TextEntry::make('price')->money('USD')->placeholder('-'),
                        ImageEntry::make('image'),
                        TextEntry::make('link')->placeholder('-'),
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
