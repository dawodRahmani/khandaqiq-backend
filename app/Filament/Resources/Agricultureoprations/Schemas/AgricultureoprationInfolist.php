<?php

namespace App\Filament\Resources\Agricultureoprations\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;

class AgricultureoprationInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                // ================= Settings Section =================
                Section::make('Settings')
                    ->description('Language and sort order settings')
                    ->schema([
                        TextEntry::make('language.name')->label('Language'),
                        TextEntry::make('sort')->numeric()->label('Sort Order'),
                        IconEntry::make('important')->boolean()->label('Important'),
                    ])
                    ->columnSpanFull(),

                // ================= Content Section =================
                Section::make('Content')
                    ->description('Title, Description, and Image')
                    ->schema([
                        TextEntry::make('title')->label('Title'),
                        TextEntry::make('description')->columnSpanFull()->label('Description'),
                        ImageEntry::make('image')->label('Image'),
                        TextEntry::make('created_at')->dateTime()->placeholder('-')->label('Created At'),
                        TextEntry::make('updated_at')->dateTime()->placeholder('-')->label('Updated At'),
                    ])
                    ->columnSpanFull(),
            ]);
    }
}
