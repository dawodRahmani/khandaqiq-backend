<?php

namespace App\Filament\Resources\Agricultures;

use App\Filament\Resources\Agricultures\Pages\CreateAgriculture;
use App\Filament\Resources\Agricultures\Pages\EditAgriculture;
use App\Filament\Resources\Agricultures\Pages\ListAgricultures;
use App\Filament\Resources\Agricultures\Pages\ViewAgriculture;
use App\Filament\Resources\Agricultures\Schemas\AgricultureForm;
use App\Filament\Resources\Agricultures\Schemas\AgricultureInfolist;
use App\Filament\Resources\Agricultures\Tables\AgriculturesTable;
use App\Models\Agriculture;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AgricultureResource extends Resource
{
    protected static ?string $model = Agriculture::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
    protected static UnitEnum|string|null $navigationGroup = 'Sectors / Agriculture';
    protected static ?int $navigationSort = 8;
    protected static ?string $navigationLabel = 'Agriculture';
    public static function form(Schema $schema): Schema
    {
        return AgricultureForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return AgricultureInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AgriculturesTable::configure($table);
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
            'index' => ListAgricultures::route('/'),
            'create' => CreateAgriculture::route('/create'),
            'view' => ViewAgriculture::route('/{record}'),
            'edit' => EditAgriculture::route('/{record}/edit'),
        ];
    }
}
