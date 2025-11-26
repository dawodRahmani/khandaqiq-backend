<?php

namespace App\Filament\Resources\Collaborators\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;

class CollaboratorsInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                // ================= Language Section =================
                Section::make('Language')
                    ->schema([
                        TextEntry::make('language.name')->label('Language'),
                    ])
                    ->columnSpanFull(),


                // ================= Basic Info Section =================
                Section::make('Basic Information')
                    ->schema([
                        TextEntry::make('full_name'),
                        IconEntry::make('important')->boolean(),
                        TextEntry::make('description')->columnSpanFull(),
                        ImageEntry::make('image'),
                        TextEntry::make('grade')->badge(),
                        TextEntry::make('position')->placeholder('-'),
                        TextEntry::make('phone')->placeholder('-'),
                        TextEntry::make('email')->label('Email address')->placeholder('-'),
                        TextEntry::make('sort')->numeric(),
                    ])
                    ->columnSpanFull(),

                // ================= Timestamps Section =================
                Section::make('Timestamps')
                    ->schema([
                        TextEntry::make('created_at')->dateTime()->placeholder('-'),
                        TextEntry::make('updated_at')->dateTime()->placeholder('-'),
                    ])
                    ->columnSpanFull(),

            ]);
    }
}
