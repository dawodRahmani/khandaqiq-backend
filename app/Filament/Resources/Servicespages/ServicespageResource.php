<?php

namespace App\Filament\Resources\Servicespages;

use App\Filament\Resources\Servicespages\Pages\CreateServicespage;
use App\Filament\Resources\Servicespages\Pages\EditServicespage;
use App\Filament\Resources\Servicespages\Pages\ListServicespages;
use App\Filament\Resources\Servicespages\Pages\ViewServicespage;
use App\Filament\Resources\Servicespages\Schemas\ServicespageForm;
use App\Filament\Resources\Servicespages\Schemas\ServicespageInfolist;
use App\Filament\Resources\Servicespages\Tables\ServicespagesTable;
use App\Models\Servicespage;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ServicespageResource extends Resource
{
    protected static ?string $model = Servicespage::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
    protected static UnitEnum|string|null $navigationGroup = 'Services';
    protected static ?int $navigationSort = 10;
    protected static ?string $navigationLabel = 'Services Page';
    public static function form(Schema $schema): Schema
    {
        return ServicespageForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ServicespageInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ServicespagesTable::configure($table);
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
            'index' => ListServicespages::route('/'),
            'create' => CreateServicespage::route('/create'),
            'view' => ViewServicespage::route('/{record}'),
            'edit' => EditServicespage::route('/{record}/edit'),
        ];
    }
}
