<?php

namespace App\Filament\Resources\Inevesmentoprations;

use App\Filament\Resources\Inevesmentoprations\Pages\CreateInevesmentopration;
use App\Filament\Resources\Inevesmentoprations\Pages\EditInevesmentopration;
use App\Filament\Resources\Inevesmentoprations\Pages\ListInevesmentoprations;
use App\Filament\Resources\Inevesmentoprations\Pages\ViewInevesmentopration;
use App\Filament\Resources\Inevesmentoprations\Schemas\InevesmentoprationForm;
use App\Filament\Resources\Inevesmentoprations\Schemas\InevesmentoprationInfolist;
use App\Filament\Resources\Inevesmentoprations\Tables\InevesmentoprationsTable;
use App\Models\Inevesmentopration;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class InevesmentoprationResource extends Resource
{
    protected static ?string $model = Inevesmentopration::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
    protected static UnitEnum|string|null $navigationGroup = 'Sectors / Investment';
    protected static ?int $navigationSort = 7;
    protected static ?string $navigationLabel = 'Investment - Operations';
    public static function form(Schema $schema): Schema
    {
        return InevesmentoprationForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return InevesmentoprationInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return InevesmentoprationsTable::configure($table);
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
            'index' => ListInevesmentoprations::route('/'),
            'create' => CreateInevesmentopration::route('/create'),
            'view' => ViewInevesmentopration::route('/{record}'),
            'edit' => EditInevesmentopration::route('/{record}/edit'),
        ];
    }
}
