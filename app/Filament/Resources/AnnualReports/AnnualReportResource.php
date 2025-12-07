<?php

namespace App\Filament\Resources\AnnualReports;

use App\Filament\Resources\AnnualReports\Pages\CreateAnnualReport;
use App\Filament\Resources\AnnualReports\Pages\EditAnnualReport;
use App\Filament\Resources\AnnualReports\Pages\ListAnnualReports;
use App\Filament\Resources\AnnualReports\Pages\ViewAnnualReport;
use App\Filament\Resources\AnnualReports\Schemas\AnnualReportForm;
use App\Filament\Resources\AnnualReports\Schemas\AnnualReportInfolist;
use App\Filament\Resources\AnnualReports\Tables\AnnualReportsTable;
use App\Models\AnnualReport;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AnnualReportResource extends Resource
{
    protected static ?string $model = AnnualReport::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedChartBar;
    protected static UnitEnum|string|null $navigationGroup = 'Profile';
    protected static ?int $navigationSort = 22;
    protected static ?string $navigationLabel = 'Annual Reports';

    public static function form(Schema $schema): Schema
    {
        return AnnualReportForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return AnnualReportInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AnnualReportsTable::configure($table);
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
            'index' => ListAnnualReports::route('/'),
            'create' => CreateAnnualReport::route('/create'),
            'view' => ViewAnnualReport::route('/{record}'),
            'edit' => EditAnnualReport::route('/{record}/edit'),
        ];
    }
}
