<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;

class ServiceInfolist
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
                    ])
                    ->columnSpanFull(),

                Section::make('Description & Media')
                    ->schema([
                        TextEntry::make('description')->columnSpanFull(),
                        ImageEntry::make('image'),
                    ])
                    ->columnSpanFull(),

                Section::make('Contact & Settings')
                    ->schema([
                        TextEntry::make('phone')->placeholder('-'),
                        TextEntry::make('email')->label('Email address')->placeholder('-'),
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
