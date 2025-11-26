<?php

namespace App\Filament\Resources\Miningoprations\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;

class MiningoprationInfolist
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

                Section::make('Basic Details')
                    ->schema([
                        TextEntry::make('title'),
                        IconEntry::make('important')->boolean(),
                        TextEntry::make('description')->columnSpanFull(),
                        ImageEntry::make('image'),
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
