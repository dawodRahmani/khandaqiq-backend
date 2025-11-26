<?php

namespace App\Filament\Resources\FollowUs;

use App\Filament\Resources\FollowUs\Pages\CreateFollowUs;
use App\Filament\Resources\FollowUs\Pages\EditFollowUs;
use App\Filament\Resources\FollowUs\Pages\ListFollowUs;
use App\Filament\Resources\FollowUs\Pages\ViewFollowUs;
use App\Filament\Resources\FollowUs\Schemas\FollowUsForm;
use App\Filament\Resources\FollowUs\Schemas\FollowUsInfolist;
use App\Filament\Resources\FollowUs\Tables\FollowUsTable;
use App\Models\FollowUs;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class FollowUsResource extends Resource
{
    protected static ?string $model = FollowUs::class;
    protected static ?string $navigationLabel="Follow Us";
    protected static UnitEnum|string|null $navigationGroup = 'Setting';
    protected static ?int $navigationSort = 1;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return FollowUsForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return FollowUsInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return FollowUsTable::configure($table);
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
            'index' => ListFollowUs::route('/'),
            'create' => CreateFollowUs::route('/create'),
            'view' => ViewFollowUs::route('/{record}'),
            'edit' => EditFollowUs::route('/{record}/edit'),
        ];
    }
}
