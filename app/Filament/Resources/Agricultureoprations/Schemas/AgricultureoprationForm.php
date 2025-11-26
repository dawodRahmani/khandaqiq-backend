<?php

namespace App\Filament\Resources\Agricultureoprations\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;

class AgricultureoprationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                // ================= Settings Section =================
                Section::make('Settings')
                    ->description('Language and sort order settings')
                    ->schema([
                        Select::make('language_id')
                            ->label('Language')
                            ->required()
                            ->relationship('language', 'name'),
                        TextInput::make('sort')->required()->numeric()->default(0)->label('Sort Order'),
                        Toggle::make('important')->required()->label('Important'),
                    ])
                    ->columnSpanFull(),

                // ================= Content Section =================
                Section::make('Content')
                    ->description('Title, Description and Image')
                    ->schema([
                        TextInput::make('title')->required()->label('Title'),
                        Textarea::make('description')->required()->label('Description')->columnSpanFull(),
                        FileUpload::make('image')->image()->required()->label('Image'),
                    ])
                    ->columnSpanFull(),
            ]);
    }
}
