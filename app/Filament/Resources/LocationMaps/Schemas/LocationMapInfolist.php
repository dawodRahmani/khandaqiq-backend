<?php

namespace App\Filament\Resources\LocationMaps\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;

class LocationMapInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Location Details')
                    ->schema([
                        TextEntry::make('title')->placeholder('-'),
                        TextEntry::make('latitude')->numeric()->placeholder('-'),
                        TextEntry::make('longitude')->numeric()->placeholder('-'),
                        TextEntry::make('address')->placeholder('-'),
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
