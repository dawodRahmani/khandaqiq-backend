<?php

namespace App\Filament\Resources\Collaborators\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;

class CollaboratorsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Settings')
                    ->schema([
                        Select::make('language_id')
                            ->label('Language')
                            ->required()
                            ->relationship('language', 'name'),
                        TextInput::make('sort')
                            ->required()
                            ->numeric()
                            ->default(0),
                        Toggle::make('important')
                            ->required(),
                    ])
                    ->columnSpanFull(),

                Section::make('Personal Information')
                    ->schema([
                        TextInput::make('full_name')
                            ->required(),
                        TextInput::make('position')
                            ->default(null),
                        Select::make('grade')
                            ->options([1 => '1', '2', '3', '4', '5', '6', '7', '8', '9', '10'])
                            ->default('5')
                            ->required(),
                    ])
                    ->columnSpanFull(),

                Section::make('Description & Image')
                    ->schema([
                        Textarea::make('description')
                            ->required()
                            ->columnSpanFull(),
                        FileUpload::make('image')
                            ->image()
                            ->required(),
                    ])
                    ->columnSpanFull(),

                Section::make('Contact Information')
                    ->schema([
                        TextInput::make('phone')
                            ->tel()
                            ->default(null),
                        TextInput::make('email')
                            ->label('Email address')
                            ->email()
                            ->default(null),
                    ])
                    ->columnSpanFull(),
            ]);
    }
}
