<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;

class ProductsForm
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

                Section::make('Basic Information')
                    ->schema([
                        TextInput::make('title')->required(),
                        Toggle::make('important')->required(),
                        Select::make('type')->options(['Metals' => 'Metals', 'Non-Metals' => 'Non  metals'])->required(),
                    ])
                    ->columnSpanFull(),

                Section::make('Description & Pricing')
                    ->schema([
                        Textarea::make('description')->required()->columnSpanFull(),
                        TextInput::make('price')
                            ->numeric()
                            ->prefix('$')
                            ->placeholder('0.00'),
                        FileUpload::make('image')
                            ->image()
                            ->disk('public')
                            ->directory('products')
                            ->visibility('public')
                            ->required(),
                        TextInput::make('link')->default(null),
                    ])
                    ->columnSpanFull(),

                Section::make('Settings')
                    ->schema([
                        TextInput::make('sort')->required()->numeric()->default(0),
                    ])
                    ->columnSpanFull(),
            ]);
    }
}
