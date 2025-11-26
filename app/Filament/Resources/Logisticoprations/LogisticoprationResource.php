<?php

namespace App\Filament\Resources\Logisticoprations;

use App\Filament\Resources\Logisticoprations\Pages\CreateLogisticopration;
use App\Filament\Resources\Logisticoprations\Pages\EditLogisticopration;
use App\Filament\Resources\Logisticoprations\Pages\ListLogisticoprations;
use App\Filament\Resources\Logisticoprations\Pages\ViewLogisticopration;
use App\Filament\Resources\Logisticoprations\Schemas\LogisticoprationForm;
use App\Filament\Resources\Logisticoprations\Schemas\LogisticoprationInfolist;
use App\Filament\Resources\Logisticoprations\Tables\LogisticoprationsTable;
use App\Models\Logisticopration;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class LogisticoprationResource extends Resource
{
    protected static ?string $model = Logisticopration::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
    protected static UnitEnum|string|null $navigationGroup = 'Sectors / Logistics';
    protected static ?int $navigationSort = 6;
    protected static ?string $navigationLabel = 'Logistics - Operations';

    public static function form(Schema $schema): Schema
    {
        return LogisticoprationForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return LogisticoprationInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return LogisticoprationsTable::configure($table);
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
            'index' => ListLogisticoprations::route('/'),
            'create' => CreateLogisticopration::route('/create'),
            'view' => ViewLogisticopration::route('/{record}'),
            'edit' => EditLogisticopration::route('/{record}/edit'),
        ];
    }
}
