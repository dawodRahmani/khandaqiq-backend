<?php

namespace App\Filament\Resources\AnnualReports\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class AnnualReportInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('language.name')->label('Language'),
                TextEntry::make('title'),
                TextEntry::make('date')
                    ->label('Report Date'),
                ImageEntry::make('thumbnail'),
                TextEntry::make('file')
                    ->label('File Path'),
                TextEntry::make('sort')
                    ->numeric(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
