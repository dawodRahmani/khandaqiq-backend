<?php

namespace App\Filament\Resources\Miningprojects;

use App\Filament\Resources\Miningprojects\Pages\CreateMiningproject;
use App\Filament\Resources\Miningprojects\Pages\EditMiningproject;
use App\Filament\Resources\Miningprojects\Pages\ListMiningprojects;
use App\Filament\Resources\Miningprojects\Pages\ViewMiningproject;
use App\Filament\Resources\Miningprojects\Schemas\MiningprojectForm;
use App\Filament\Resources\Miningprojects\Schemas\MiningprojectInfolist;
use App\Filament\Resources\Miningprojects\Tables\MiningprojectsTable;
use App\Models\Miningproject;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class MiningprojectResource extends Resource
{
    protected static ?string $model = Miningproject::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
    protected static UnitEnum|string|null $navigationGroup = 'Sectors / Mining';
    protected static ?int $navigationSort = 5;
    protected static ?string $navigationLabel = 'Mining - Projects';
    public static function form(Schema $schema): Schema
    {
        return MiningprojectForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return MiningprojectInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MiningprojectsTable::configure($table);
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
            'index' => ListMiningprojects::route('/'),
            'create' => CreateMiningproject::route('/create'),
            'view' => ViewMiningproject::route('/{record}'),
            'edit' => EditMiningproject::route('/{record}/edit'),
        ];
    }
}
