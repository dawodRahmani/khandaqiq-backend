<?php

namespace App\Filament\Resources\Snapshots;

use App\Filament\Resources\Snapshots\Pages\CreateSnapshot;
use App\Filament\Resources\Snapshots\Pages\EditSnapshot;
use App\Filament\Resources\Snapshots\Pages\ListSnapshots;
use App\Filament\Resources\Snapshots\Pages\ViewSnapshot;
use App\Filament\Resources\Snapshots\Schemas\SnapshotForm;
use App\Filament\Resources\Snapshots\Schemas\SnapshotInfolist;
use App\Filament\Resources\Snapshots\Tables\SnapshotsTable;
use App\Models\Snapshot;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SnapshotResource extends Resource
{
    protected static ?string $model = Snapshot::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
    protected static UnitEnum|string|null $navigationGroup = 'Gallery';
    protected static ?int $navigationSort = 12;
    protected static ?string $navigationLabel = 'Snapshots';

    public static function form(Schema $schema): Schema
    {
        return SnapshotForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return SnapshotInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SnapshotsTable::configure($table);
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
            'index' => ListSnapshots::route('/'),
            'create' => CreateSnapshot::route('/create'),
            'view' => ViewSnapshot::route('/{record}'),
            'edit' => EditSnapshot::route('/{record}/edit'),
        ];
    }
}
