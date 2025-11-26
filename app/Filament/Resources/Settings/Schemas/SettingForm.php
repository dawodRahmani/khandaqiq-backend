<?php

namespace App\Filament\Resources\Settings\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class SettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('key')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(255)
                    ->label('Key')
                    ->helperText('Unique identifier for this setting'),

                Select::make('type')
                    ->required()
                    ->options([
                        'text' => 'Text',
                        'image' => 'Image',
                    ])
                    ->default('text')
                    ->live()
                    ->label('Type'),

                Textarea::make('value')
                    ->columnSpanFull()
                    ->rows(5)
                    ->label('Value')
                    ->visible(fn ($get) => $get('type') === 'text')
                    ->helperText('Enter the text value for this setting'),

                FileUpload::make('value')
                    ->columnSpanFull()
                    ->label('Image')
                    ->image()
                    ->disk('public')
                    ->directory('settings')
                    ->visibility('public')
                    ->visible(fn ($get) => $get('type') === 'image')
                    ->helperText('Upload an image file for this setting'),
            ]);
    }
}
