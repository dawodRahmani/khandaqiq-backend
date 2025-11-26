<?php

namespace App\Filament\Resources\Miningoprations;

use App\Filament\Resources\Miningoprations\Pages\CreateMiningopration;
use App\Filament\Resources\Miningoprations\Pages\EditMiningopration;
use App\Filament\Resources\Miningoprations\Pages\ListMiningoprations;
use App\Filament\Resources\Miningoprations\Pages\ViewMiningopration;
use App\Filament\Resources\Miningoprations\Schemas\MiningoprationForm;
use App\Filament\Resources\Miningoprations\Schemas\MiningoprationInfolist;
use App\Filament\Resources\Miningoprations\Tables\MiningoprationsTable;
use App\Models\Miningopration;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class MiningoprationResource extends Resource
{
    protected static ?string $model = Miningopration::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
    protected static UnitEnum|string|null $navigationGroup = 'Sectors / Mining';
    protected static ?int $navigationSort = 5;
    protected static ?string $navigationLabel = 'Mining - Operations';
    public static function form(Schema $schema): Schema
    {
        return MiningoprationForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return MiningoprationInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MiningoprationsTable::configure($table);
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
            'index' => ListMiningoprations::route('/'),
            'create' => CreateMiningopration::route('/create'),
            'view' => ViewMiningopration::route('/{record}'),
            'edit' => EditMiningopration::route('/{record}/edit'),
        ];
    }
}
