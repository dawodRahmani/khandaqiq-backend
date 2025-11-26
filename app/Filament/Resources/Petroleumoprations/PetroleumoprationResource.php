<?php

namespace App\Filament\Resources\Petroleumoprations;

use App\Filament\Resources\Petroleumoprations\Pages\CreatePetroleumopration;
use App\Filament\Resources\Petroleumoprations\Pages\EditPetroleumopration;
use App\Filament\Resources\Petroleumoprations\Pages\ListPetroleumoprations;
use App\Filament\Resources\Petroleumoprations\Pages\ViewPetroleumopration;
use App\Filament\Resources\Petroleumoprations\Schemas\PetroleumoprationForm;
use App\Filament\Resources\Petroleumoprations\Schemas\PetroleumoprationInfolist;
use App\Filament\Resources\Petroleumoprations\Tables\PetroleumoprationsTable;
use App\Models\Petroleumopration;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PetroleumoprationResource extends Resource
{
    protected static ?string $model = Petroleumopration::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
    protected static UnitEnum|string|null $navigationGroup = 'Sectors / Petroleum';
    protected static ?int $navigationSort = 9;
    protected static ?string $navigationLabel = 'Petroleum - Operations';
    public static function form(Schema $schema): Schema
    {
        return PetroleumoprationForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return PetroleumoprationInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PetroleumoprationsTable::configure($table);
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
            'index' => ListPetroleumoprations::route('/'),
            'create' => CreatePetroleumopration::route('/create'),
            'view' => ViewPetroleumopration::route('/{record}'),
            'edit' => EditPetroleumopration::route('/{record}/edit'),
        ];
    }
}
