<?php

namespace App\Filament\Resources\Logisticoprations\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class LogisticoprationInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('language_id')
                    ->numeric(),
                TextEntry::make('title'),
                IconEntry::make('important')
                    ->boolean(),
                TextEntry::make('description')
                    ->columnSpanFull(),
                ImageEntry::make('image'),
                TextEntry::make('sort')
                    ->numeric(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
