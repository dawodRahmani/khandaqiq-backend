<?php

namespace App\Filament\Resources\QuickAccesses;

use App\Filament\Resources\QuickAccesses\Pages\CreateQuickAccess;
use App\Filament\Resources\QuickAccesses\Pages\EditQuickAccess;
use App\Filament\Resources\QuickAccesses\Pages\ListQuickAccesses;
use App\Filament\Resources\QuickAccesses\Schemas\QuickAccessForm;
use App\Filament\Resources\QuickAccesses\Tables\QuickAccessesTable;
use App\Models\QuickAccess;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class QuickAccessResource extends Resource
{
    protected static ?string $model = QuickAccess::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
    protected static UnitEnum|string|null $navigationGroup = 'Setting';
    protected static ?int $navigationSort = 1;
    protected static ?string $navigationLabel = 'Quick Access';

    public static function form(Schema $schema): Schema
    {
        return QuickAccessForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return QuickAccessesTable::configure($table);
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
            'index' => ListQuickAccesses::route('/'),
            'create' => CreateQuickAccess::route('/create'),
            'edit' => EditQuickAccess::route('/{record}/edit'),
        ];
    }
}
