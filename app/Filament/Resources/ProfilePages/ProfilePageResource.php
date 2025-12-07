<?php

namespace App\Filament\Resources\ProfilePages;

use App\Filament\Resources\ProfilePages\Pages\CreateProfilePage;
use App\Filament\Resources\ProfilePages\Pages\EditProfilePage;
use App\Filament\Resources\ProfilePages\Pages\ListProfilePages;
use App\Filament\Resources\ProfilePages\Pages\ViewProfilePage;
use App\Filament\Resources\ProfilePages\Schemas\ProfilePageForm;
use App\Filament\Resources\ProfilePages\Schemas\ProfilePageInfolist;
use App\Filament\Resources\ProfilePages\Tables\ProfilePagesTable;
use App\Models\ProfilePage;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ProfilePageResource extends Resource
{
    protected static ?string $model = ProfilePage::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedDocumentText;
    protected static UnitEnum|string|null $navigationGroup = 'Profile';
    protected static ?int $navigationSort = 20;
    protected static ?string $navigationLabel = 'Profile Page';

    public static function form(Schema $schema): Schema
    {
        return ProfilePageForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ProfilePageInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ProfilePagesTable::configure($table);
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
            'index' => ListProfilePages::route('/'),
            'create' => CreateProfilePage::route('/create'),
            'view' => ViewProfilePage::route('/{record}'),
            'edit' => EditProfilePage::route('/{record}/edit'),
        ];
    }
}
