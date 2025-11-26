<?php

namespace App\Filament\Resources\ContactUsPages;

use App\Filament\Resources\ContactUsPages\Pages\CreateContactUsPage;
use App\Filament\Resources\ContactUsPages\Pages\EditContactUsPage;
use App\Filament\Resources\ContactUsPages\Pages\ListContactUsPages;
use App\Filament\Resources\ContactUsPages\Pages\ViewContactUsPage;
use App\Filament\Resources\ContactUsPages\Schemas\ContactUsPageForm;
use App\Filament\Resources\ContactUsPages\Schemas\ContactUsPageInfolist;
use App\Filament\Resources\ContactUsPages\Tables\ContactUsPagesTable;
use App\Models\ContactUsPage;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ContactUsPageResource extends Resource
{
    protected static ?string $model = ContactUsPage::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
    protected static UnitEnum|string|null $navigationGroup = 'Contact us';
    protected static ?int $navigationSort = 13;
    protected static ?string $navigationLabel = 'Contact Us';
    public static function form(Schema $schema): Schema
    {
        return ContactUsPageForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ContactUsPageInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ContactUsPagesTable::configure($table);
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
            'index' => ListContactUsPages::route('/'),
            'create' => CreateContactUsPage::route('/create'),
            'view' => ViewContactUsPage::route('/{record}'),
            'edit' => EditContactUsPage::route('/{record}/edit'),
        ];
    }
}
