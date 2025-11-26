<?php

namespace App\Filament\Resources\LocationMaps;

use App\Filament\Resources\LocationMaps\Pages\CreateLocationMap;
use App\Filament\Resources\LocationMaps\Pages\EditLocationMap;
use App\Filament\Resources\LocationMaps\Pages\ListLocationMaps;
use App\Filament\Resources\LocationMaps\Pages\ViewLocationMap;
use App\Filament\Resources\LocationMaps\Schemas\LocationMapForm;
use App\Filament\Resources\LocationMaps\Schemas\LocationMapInfolist;
use App\Filament\Resources\LocationMaps\Tables\LocationMapsTable;
use App\Models\LocationMap;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class LocationMapResource extends Resource
{
    protected static ?string $model = LocationMap::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
    protected static UnitEnum|string|null $navigationGroup = 'Setting';
    protected static ?int $navigationSort = 1;
    protected static ?string $navigationLabel = 'Location Maps';

    public static function form(Schema $schema): Schema
    {
        return LocationMapForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return LocationMapInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return LocationMapsTable::configure($table);
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
            'index' => ListLocationMaps::route('/'),
            'create' => CreateLocationMap::route('/create'),
            'view' => ViewLocationMap::route('/{record}'),
            'edit' => EditLocationMap::route('/{record}/edit'),
        ];
    }
}
