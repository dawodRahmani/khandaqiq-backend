<?php

namespace App\Filament\Resources\Productpages;

use App\Filament\Resources\Productpages\Pages\CreateProductpage;
use App\Filament\Resources\Productpages\Pages\EditProductpage;
use App\Filament\Resources\Productpages\Pages\ListProductpages;
use App\Filament\Resources\Productpages\Pages\ViewProductpage;
use App\Filament\Resources\Productpages\Schemas\ProductpageForm;
use App\Filament\Resources\Productpages\Schemas\ProductpageInfolist;
use App\Filament\Resources\Productpages\Tables\ProductpagesTable;
use App\Models\Productpage;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ProductpageResource extends Resource
{
    protected static ?string $model = Productpage::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
    protected static UnitEnum|string|null $navigationGroup = 'Products';
    protected static ?int $navigationSort = 4;
    protected static ?string $navigationLabel = 'Product Page';
    public static function form(Schema $schema): Schema
    {
        return ProductpageForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ProductpageInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ProductpagesTable::configure($table);
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
            'index' => ListProductpages::route('/'),
            'create' => CreateProductpage::route('/create'),
            'view' => ViewProductpage::route('/{record}'),
            'edit' => EditProductpage::route('/{record}/edit'),
        ];
    }
}
