<?php

namespace App\Filament\Resources\AnnualReports\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;

class AnnualReportForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                // ================= Language Section =================
                Section::make('Language')
                    ->schema([
                        Select::make('language_id')
                            ->label('Language')
                            ->relationship('language', 'name')
                            ->required(),
                    ])
                    ->columnSpanFull(),

                // ================= Report Info Section =================
                Section::make('Report Information')
                    ->schema([
                        TextInput::make('title')
                            ->label('Title')
                            ->required(),
                        TextInput::make('date')
                            ->label('Report Date/Year')
                            ->placeholder('e.g., 2024 or January 2024'),
                        FileUpload::make('thumbnail')
                            ->image()
                            ->label('Thumbnail Image'),
                        FileUpload::make('file')
                            ->label('Report File (PDF)')
                            ->acceptedFileTypes(['application/pdf'])
                            ->directory('annual-reports'),
                    ])
                    ->columnSpanFull(),

                // ================= Settings Section =================
                Section::make('Settings')
                    ->schema([
                        TextInput::make('sort')
                            ->required()
                            ->numeric()
                            ->default(0),
                    ])
                    ->columnSpanFull(),

            ]);
    }
}
