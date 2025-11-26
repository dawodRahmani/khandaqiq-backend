<?php

namespace App\Filament\Resources\Inevesments\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;

class InevesmentForm
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

                // ================= Slide 1 Section =================
                Section::make('Slide 1')
                    ->schema([
                        TextInput::make('slide_title_1')->required(),
                        Textarea::make('slide_subtitle_1')->required()->columnSpanFull(),
                        FileUpload::make('slide_image_1')->image()->required(),
                    ])
                    ->columnSpanFull(),

                // ================= Slide 2 Section =================
                Section::make('Slide 2')
                    ->schema([
                        TextInput::make('slide_title_2')->default(null),
                        Textarea::make('slide_subtitle_2')->default(null)->columnSpanFull(),
                        FileUpload::make('slide_image_2')->image(),
                    ])
                    ->columnSpanFull(),

                // ================= Slide 3 Section =================
                Section::make('Slide 3')
                    ->schema([
                        TextInput::make('slide_title_3')->default(null),
                        Textarea::make('slide_subtitle_3')->default(null)->columnSpanFull(),
                        FileUpload::make('slide_image_3')->image(),
                    ])
                    ->columnSpanFull(),

                // ================= About Section =================
                Section::make('About')
                    ->schema([
                        TextInput::make('about_title')->required(),
                        FileUpload::make('about_image')->image()->required(),
                        Textarea::make('about_message')->required()->columnSpanFull(),
                    ])
                    ->columnSpanFull(),

                // ================= Operations Section =================
                Section::make('Operations')
                    ->schema([
                        TextInput::make('operations_message')->required(),
                    ])
                    ->columnSpanFull(),

                // ================= Settings Section =================
                Section::make('Settings')
                    ->schema([
                        TextInput::make('sort')->required()->numeric()->default(0),
                    ])
                    ->columnSpanFull(),

            ]);
    }
}
