<?php

namespace App\Filament\Resources\Inevesmentoprations\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class InevesmentoprationInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('language.name')->label('Language'),
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
