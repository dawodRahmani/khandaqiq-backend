<?php

namespace App\Filament\Resources\HomePages;

use App\Filament\Resources\HomePages\Pages\CreateHomePage;
use App\Filament\Resources\HomePages\Pages\EditHomePage;
use App\Filament\Resources\HomePages\Pages\ListHomePages;
use App\Filament\Resources\HomePages\Pages\ViewHomePage;
use App\Filament\Resources\HomePages\Schemas\HomePageForm;
use App\Filament\Resources\HomePages\Schemas\HomePageInfolist;
use App\Filament\Resources\HomePages\Tables\HomePagesTable;
use App\Models\HomePage;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class HomePageResource extends Resource
{
    protected static ?string $model = HomePage::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
    protected static UnitEnum|string|null $navigationGroup = 'Home';
    protected static ?int $navigationSort = 2;
    protected static ?string $navigationLabel="home page";
    public static function form(Schema $schema): Schema
    {
        return HomePageForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return HomePageInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return HomePagesTable::configure($table);
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
            'index' => ListHomePages::route('/'),
            'create' => CreateHomePage::route('/create'),
            'view' => ViewHomePage::route('/{record}'),
            'edit' => EditHomePage::route('/{record}/edit'),
        ];
    }
}
