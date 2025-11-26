<?php

namespace App\Filament\Resources\HrPages;

use App\Filament\Resources\HrPages\Pages\CreateHrPage;
use App\Filament\Resources\HrPages\Pages\EditHrPage;
use App\Filament\Resources\HrPages\Pages\ListHrPages;
use App\Filament\Resources\HrPages\Pages\ViewHrPage;
use App\Filament\Resources\HrPages\Schemas\HrPageForm;
use App\Filament\Resources\HrPages\Schemas\HrPageInfolist;
use App\Filament\Resources\HrPages\Tables\HrPagesTable;
use App\Models\HrPage;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class HrPageResource extends Resource
{
    protected static ?string $model = HrPage::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
    protected static UnitEnum|string|null $navigationGroup = 'Human Resource';
    protected static ?int $navigationSort = 11;
        protected static ?string $navigationLabel="humn resource page";
    public static function form(Schema $schema): Schema
    {
        return HrPageForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return HrPageInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return HrPagesTable::configure($table);
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
            'index' => ListHrPages::route('/'),
            'create' => CreateHrPage::route('/create'),
            'view' => ViewHrPage::route('/{record}'),
            'edit' => EditHrPage::route('/{record}/edit'),
        ];
    }
}
