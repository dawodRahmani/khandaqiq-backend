<?php

namespace App\Filament\Resources\Collaborators;

use App\Filament\Resources\Collaborators\Pages\CreateCollaborators;
use App\Filament\Resources\Collaborators\Pages\EditCollaborators;
use App\Filament\Resources\Collaborators\Pages\ListCollaborators;
use App\Filament\Resources\Collaborators\Pages\ViewCollaborators;
use App\Filament\Resources\Collaborators\Schemas\CollaboratorsForm;
use App\Filament\Resources\Collaborators\Schemas\CollaboratorsInfolist;
use App\Filament\Resources\Collaborators\Tables\CollaboratorsTable;
use App\Models\Collaborators;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class CollaboratorsResource extends Resource
{
    protected static ?string $model = Collaborators::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
    protected static UnitEnum|string|null $navigationGroup = 'Human Resource';
    protected static ?int $navigationSort = 11;
    protected static ?string $navigationLabel = 'Collaborators';
    public static function form(Schema $schema): Schema
    {
        return CollaboratorsForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return CollaboratorsInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CollaboratorsTable::configure($table);
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
            'index' => ListCollaborators::route('/'),
            'create' => CreateCollaborators::route('/create'),
            'view' => ViewCollaborators::route('/{record}'),
            'edit' => EditCollaborators::route('/{record}/edit'),
        ];
    }
}
