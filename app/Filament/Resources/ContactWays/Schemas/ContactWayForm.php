<?php

namespace App\Filament\Resources\ContactWays\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;

class ContactWayForm
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

                // ================= Basic Info =================
                Section::make('Basic Information')
                    ->schema([
                        TextInput::make('title')->required(),
                        Textarea::make('address')->required()->columnSpanFull(),
                        TextInput::make('email_1')->label('Primary Email')->email()->required(),
                        TextInput::make('email_2')->label('Secondary Email')->email()->default(null),
                        TextInput::make('phone_1')->label('Primary Phone')->tel()->required(),
                        TextInput::make('phone_2')->label('Secondary Phone')->tel()->default(null),
                    ])
                    ->columnSpanFull(),

                // ================= Settings =================
                Section::make('Settings')
                    ->schema([
                        TextInput::make('sort')->required()->numeric()->default(0),
                    ])
                    ->columnSpanFull(),

            ]);
    }
}
