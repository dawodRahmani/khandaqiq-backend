<?php

namespace App\Filament\Resources\FollowUs\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class FollowUsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('instagram_link')->required(),
            TextInput::make('facebook_link')->required(),
            TextInput::make('youtube_link')->required(),
            TextInput::make('x_link')->label('X (Twitter) Link'),
            Toggle::make('is_active')->required(),
        ]);
    }
}
