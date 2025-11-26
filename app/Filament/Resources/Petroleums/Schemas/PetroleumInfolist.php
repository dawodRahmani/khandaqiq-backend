<?php

namespace App\Filament\Resources\Petroleums\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class PetroleumInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('language.name')
                    ->label('Language'),
                TextEntry::make('slide_title_1'),
                TextEntry::make('slide_subtitle_1')
                    ->columnSpanFull(),
                ImageEntry::make('slide_image_1'),
                TextEntry::make('slide_title_2')
                    ->placeholder('-'),
                TextEntry::make('slide_subtitle_2')
                    ->placeholder('-')
                    ->columnSpanFull(),
                ImageEntry::make('slide_image_2')
                    ->placeholder('-'),
                TextEntry::make('slide_title_3')
                    ->placeholder('-'),
                TextEntry::make('slide_subtitle_3')
                    ->placeholder('-')
                    ->columnSpanFull(),
                ImageEntry::make('slide_image_3')
                    ->placeholder('-'),
                TextEntry::make('about_title'),
                ImageEntry::make('about_image'),
                TextEntry::make('about_message')
                    ->columnSpanFull(),
                TextEntry::make('operations_message'),
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
