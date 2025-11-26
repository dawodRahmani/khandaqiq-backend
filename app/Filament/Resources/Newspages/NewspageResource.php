<?php

namespace App\Filament\Resources\Newspages;

use App\Filament\Resources\Newspages\Pages\CreateNewspage;
use App\Filament\Resources\Newspages\Pages\EditNewspage;
use App\Filament\Resources\Newspages\Pages\ListNewspages;
use App\Filament\Resources\Newspages\Pages\ViewNewspage;
use App\Filament\Resources\Newspages\Schemas\NewspageForm;
use App\Filament\Resources\Newspages\Schemas\NewspageInfolist;
use App\Filament\Resources\Newspages\Tables\NewspagesTable;
use App\Models\Newspage;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class NewspageResource extends Resource
{
    protected static ?string $model = Newspage::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
    protected static UnitEnum|string|null $navigationGroup = 'News';
    protected static ?int $navigationSort = 3;
    protected static ?string $navigationLabel = 'News Page';
    public static function form(Schema $schema): Schema
    {
        return NewspageForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return NewspageInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return NewspagesTable::configure($table);
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
            'index' => ListNewspages::route('/'),
            'create' => CreateNewspage::route('/create'),
            'view' => ViewNewspage::route('/{record}'),
            'edit' => EditNewspage::route('/{record}/edit'),
        ];
    }
}
