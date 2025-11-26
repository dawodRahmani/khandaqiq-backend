<?php

namespace App\Filament\Resources\ContactWays;

use App\Filament\Resources\ContactWays\Pages\CreateContactWay;
use App\Filament\Resources\ContactWays\Pages\EditContactWay;
use App\Filament\Resources\ContactWays\Pages\ListContactWays;
use App\Filament\Resources\ContactWays\Pages\ViewContactWay;
use App\Filament\Resources\ContactWays\Schemas\ContactWayForm;
use App\Filament\Resources\ContactWays\Schemas\ContactWayInfolist;
use App\Filament\Resources\ContactWays\Tables\ContactWaysTable;
use App\Models\ContactWay;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ContactWayResource extends Resource
{
    protected static ?string $model = ContactWay::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
    protected static UnitEnum|string|null $navigationGroup = 'Contact us';
    protected static ?int $navigationSort = 13;
    protected static ?string $navigationLabel="connect way";
    public static function form(Schema $schema): Schema
    {
        return ContactWayForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ContactWayInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ContactWaysTable::configure($table);
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
            'index' => ListContactWays::route('/'),
            'create' => CreateContactWay::route('/create'),
            'view' => ViewContactWay::route('/{record}'),
            'edit' => EditContactWay::route('/{record}/edit'),
        ];
    }
}
