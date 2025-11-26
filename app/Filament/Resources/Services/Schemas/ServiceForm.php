<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Language')
                    ->schema([
                        Select::make('language_id')->label('Language')->required()->relationship('language', 'name'),
                    ])
                    ->columnSpanFull(),

                Section::make('Basic')
                    ->schema([
                        TextInput::make('title')->required(),
                        Toggle::make('important')->required(),
                    ])
                    ->columnSpanFull(),

                Section::make('Description & Media')
                    ->schema([
                        Textarea::make('description')->required()->columnSpanFull(),
                        FileUpload::make('image')->image()->required(),
                    ])
                    ->columnSpanFull(),

                Section::make('Contact & Settings')
                    ->schema([
                        TextInput::make('phone')->tel()->default(null),
                        TextInput::make('email')->label('Email address')->email()->default(null),
                        TextInput::make('sort')->required()->numeric()->default(0),
                    ])
                    ->columnSpanFull(),
            ]);
    }
}
