<?php

namespace App\Filament\Resources\Petroleums;

use App\Filament\Resources\Petroleums\Pages\CreatePetroleum;
use App\Filament\Resources\Petroleums\Pages\EditPetroleum;
use App\Filament\Resources\Petroleums\Pages\ListPetroleums;
use App\Filament\Resources\Petroleums\Pages\ViewPetroleum;
use App\Filament\Resources\Petroleums\Schemas\PetroleumForm;
use App\Filament\Resources\Petroleums\Schemas\PetroleumInfolist;
use App\Filament\Resources\Petroleums\Tables\PetroleumsTable;
use App\Models\Petroleum;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PetroleumResource extends Resource
{
    protected static ?string $model = Petroleum::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
    protected static UnitEnum|string|null $navigationGroup = 'Sectors / Petroleum';
    protected static ?int $navigationSort = 9;
    protected static ?string $navigationLabel = 'Petroleum - Pages';
    public static function form(Schema $schema): Schema
    {
        return PetroleumForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return PetroleumInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PetroleumsTable::configure($table);
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
            'index' => ListPetroleums::route('/'),
            'create' => CreatePetroleum::route('/create'),
            'view' => ViewPetroleum::route('/{record}'),
            'edit' => EditPetroleum::route('/{record}/edit'),
        ];
    }
}
