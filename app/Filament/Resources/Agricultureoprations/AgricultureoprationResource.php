<?php

namespace App\Filament\Resources\Agricultureoprations;

use App\Filament\Resources\Agricultureoprations\Pages\CreateAgricultureopration;
use App\Filament\Resources\Agricultureoprations\Pages\EditAgricultureopration;
use App\Filament\Resources\Agricultureoprations\Pages\ListAgricultureoprations;
use App\Filament\Resources\Agricultureoprations\Pages\ViewAgricultureopration;
use App\Filament\Resources\Agricultureoprations\Schemas\AgricultureoprationForm;
use App\Filament\Resources\Agricultureoprations\Schemas\AgricultureoprationInfolist;
use App\Filament\Resources\Agricultureoprations\Tables\AgricultureoprationsTable;
use App\Models\Agricultureopration;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AgricultureoprationResource extends Resource
{
    protected static ?string $model = Agricultureopration::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
    protected static UnitEnum|string|null $navigationGroup = 'Sectors / Agriculture';
    protected static ?int $navigationSort = 8;
    protected static ?string $navigationLabel = 'Agriculture - Operations';
    public static function form(Schema $schema): Schema
    {
        return AgricultureoprationForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return AgricultureoprationInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AgricultureoprationsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListAgricultureoprations::route('/'),
            'create' => CreateAgricultureopration::route('/create'),
            'view' => ViewAgricultureopration::route('/{record}'),
            'edit' => EditAgricultureopration::route('/{record}/edit'),
        ];
    }
}
