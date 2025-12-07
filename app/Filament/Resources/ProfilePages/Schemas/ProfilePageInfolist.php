<?php

namespace App\Filament\Resources\ProfilePages\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class ProfilePageInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('language.name')->label('Language'),
                ImageEntry::make('hero_image'),
                TextEntry::make('hero_subtitle')
                    ->columnSpanFull(),
                TextEntry::make('about_title'),
                TextEntry::make('about_message')
                    ->columnSpanFull(),
                TextEntry::make('profiles_title'),
                TextEntry::make('reports_title'),
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
