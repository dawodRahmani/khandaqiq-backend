<?php

namespace App\Filament\Resources\Miningprojects\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;

class MiningprojectForm
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

                Section::make('Project Details')
                    ->schema([
                        TextInput::make('title')->required(),
                        Textarea::make('description')->required()->columnSpanFull(),
                        Select::make('state')->options(['completed' => 'Completed', 'in progress' => 'In progress', 'coming soon' => 'Coming soon'])->required(),
                        FileUpload::make('image')->image()->required(),
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
