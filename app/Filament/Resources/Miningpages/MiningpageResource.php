<?php

namespace App\Filament\Resources\Miningpages;

use App\Filament\Resources\Miningpages\Pages\CreateMiningpage;
use App\Filament\Resources\Miningpages\Pages\EditMiningpage;
use App\Filament\Resources\Miningpages\Pages\ListMiningpages;
use App\Filament\Resources\Miningpages\Pages\ViewMiningpage;
use App\Filament\Resources\Miningpages\Schemas\MiningpageForm;
use App\Filament\Resources\Miningpages\Schemas\MiningpageInfolist;
use App\Filament\Resources\Miningpages\Tables\MiningpagesTable;
use App\Models\Miningpage;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class MiningpageResource extends Resource
{
    protected static ?string $model = Miningpage::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
    protected static UnitEnum|string|null $navigationGroup = 'Sectors / Mining';
    protected static ?int $navigationSort = 5;
    protected static ?string $navigationLabel = 'Mining - Pages';
    public static function form(Schema $schema): Schema
    {
        return MiningpageForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return MiningpageInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MiningpagesTable::configure($table);
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
            'index' => ListMiningpages::route('/'),
            'create' => CreateMiningpage::route('/create'),
            'view' => ViewMiningpage::route('/{record}'),
            'edit' => EditMiningpage::route('/{record}/edit'),
        ];
    }
}
