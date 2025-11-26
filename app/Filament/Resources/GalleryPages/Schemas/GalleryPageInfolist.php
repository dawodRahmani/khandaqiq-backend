<?php

namespace App\Filament\Resources\GalleryPages\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;

class GalleryPageInfolist
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

                Section::make('Slides')
                    ->schema([
                        TextEntry::make('slide_title_1'),
                        TextEntry::make('slide_subtitle_1')->columnSpanFull(),
                        ImageEntry::make('slide_image_1'),
                        TextEntry::make('slide_title_2')->placeholder('-'),
                        TextEntry::make('slide_subtitle_2')->placeholder('-')->columnSpanFull(),
                        ImageEntry::make('slide_image_2')->placeholder('-'),
                        TextEntry::make('slide_title_3')->placeholder('-'),
                        TextEntry::make('slide_subtitle_3')->placeholder('-')->columnSpanFull(),
                        ImageEntry::make('slide_image_3')->placeholder('-'),
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
