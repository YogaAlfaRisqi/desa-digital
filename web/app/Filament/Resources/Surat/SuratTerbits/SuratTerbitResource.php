<?php

namespace App\Filament\Resources\Surat\SuratTerbits;

use App\Filament\Resources\Surat\SuratTerbits\Pages\CreateSuratTerbit;
use App\Filament\Resources\Surat\SuratTerbits\Pages\EditSuratTerbit;
use App\Filament\Resources\Surat\SuratTerbits\Pages\ListSuratTerbits;
use App\Filament\Resources\Surat\SuratTerbits\Schemas\SuratTerbitForm;
use App\Filament\Resources\Surat\SuratTerbits\Tables\SuratTerbitsTable;
use App\Models\SuratTerbit;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SuratTerbitResource extends Resource
{   
    protected static ?string $model = SuratTerbit::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'SuratTerbit';

    protected static string | UnitEnum|null $navigationGroup = 'Surat';

    public static function form(Schema $schema): Schema
    {
        return SuratTerbitForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SuratTerbitsTable::configure($table);
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
            'index' => ListSuratTerbits::route('/'),
            'create' => CreateSuratTerbit::route('/create'),
            'edit' => EditSuratTerbit::route('/{record}/edit'),
        ];
    }

    public static function getRecordRouteBindingEloquentQuery(): Builder
    {
        return parent::getRecordRouteBindingEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
