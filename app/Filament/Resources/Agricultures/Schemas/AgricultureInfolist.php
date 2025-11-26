<?php

namespace App\Filament\Resources\Agricultures\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;

class AgricultureInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                // ================= Settings Section =================
                Section::make('Settings')
                    ->description('General settings for language and sort order')
                    ->schema([
                        TextEntry::make('language.name')
                            ->label('Language'),
                        TextEntry::make('operations_message')
                            ->label('Operations Message'),
                        TextEntry::make('sort')
                            ->numeric()
                            ->label('Sort Order'),
                    ])
                    ->columnSpanFull(),

                // ================= Slides Section =================
                Section::make('Slides')
                    ->description('All slide details')
                    ->schema([
                        // Slide 1
                        TextEntry::make('slide_title_1')->label('Slide 1 Title'),
                        TextEntry::make('slide_subtitle_1')->label('Slide 1 Subtitle')->columnSpanFull(),
                        ImageEntry::make('slide_image_1')->label('Slide 1 Image'),

                        // Slide 2
                        TextEntry::make('slide_title_2')->label('Slide 2 Title')->placeholder('-'),
                        TextEntry::make('slide_subtitle_2')->label('Slide 2 Subtitle')->placeholder('-')->columnSpanFull(),
                        ImageEntry::make('slide_image_2')->label('Slide 2 Image')->placeholder('-'),

                        // Slide 3
                        TextEntry::make('slide_title_3')->label('Slide 3 Title')->placeholder('-'),
                        TextEntry::make('slide_subtitle_3')->label('Slide 3 Subtitle')->placeholder('-')->columnSpanFull(),
                        ImageEntry::make('slide_image_3')->label('Slide 3 Image')->placeholder('-'),
                    ])
                    ->columnSpanFull(),

                // ================= About Section =================
                Section::make('About')
                    ->description('Information about the organization')
                    ->schema([
                        TextEntry::make('about_title')->label('About Title'),
                        ImageEntry::make('about_image')->label('About Image'),
                        TextEntry::make('about_message')->label('About Text')->columnSpanFull(),
                    ])
                    ->columnSpanFull(),

                // ================= Timestamps Section =================
                Section::make('Timestamps')
                    ->description('Record creation and update times')
                    ->schema([
                        TextEntry::make('created_at')->dateTime()->label('Created At')->placeholder('-'),
                        TextEntry::make('updated_at')->dateTime()->label('Updated At')->placeholder('-'),
                    ])
                    ->columnSpanFull(),
            ]);
    }
}
