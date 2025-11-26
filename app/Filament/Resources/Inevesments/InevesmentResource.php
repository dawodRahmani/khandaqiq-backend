<?php

namespace App\Filament\Resources\Inevesments;

use App\Filament\Resources\Inevesments\Pages\CreateInevesment;
use App\Filament\Resources\Inevesments\Pages\EditInevesment;
use App\Filament\Resources\Inevesments\Pages\ListInevesments;
use App\Filament\Resources\Inevesments\Pages\ViewInevesment;
use App\Filament\Resources\Inevesments\Schemas\InevesmentForm;
use App\Filament\Resources\Inevesments\Schemas\InevesmentInfolist;
use App\Filament\Resources\Inevesments\Tables\InevesmentsTable;
use App\Models\Inevesment;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class InevesmentResource extends Resource
{
    protected static ?string $model = Inevesment::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
    protected static UnitEnum|string|null $navigationGroup = 'Sectors / Investment';
    protected static ?int $navigationSort = 7;
    protected static ?string $navigationLabel = 'Investment - Pages';
    public static function form(Schema $schema): Schema
    {
        return InevesmentForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return InevesmentInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return InevesmentsTable::configure($table);
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
            'index' => ListInevesments::route('/'),
            'create' => CreateInevesment::route('/create'),
            'view' => ViewInevesment::route('/{record}'),
            'edit' => EditInevesment::route('/{record}/edit'),
        ];
    }
}
