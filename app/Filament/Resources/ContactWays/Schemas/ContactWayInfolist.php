<?php

namespace App\Filament\Resources\ContactWays\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;

class ContactWayInfolist
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

                Section::make('Basic Information')
                    ->schema([
                        TextEntry::make('title'),
                        TextEntry::make('address')->columnSpanFull(),
                        TextEntry::make('email_1'),
                        TextEntry::make('email_2')->placeholder('-'),
                        TextEntry::make('phone_1'),
                        TextEntry::make('phone_2')->placeholder('-'),
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
