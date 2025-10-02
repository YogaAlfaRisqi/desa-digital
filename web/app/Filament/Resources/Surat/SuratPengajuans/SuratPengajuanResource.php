<?php

namespace App\Filament\Resources\Surat\SuratPengajuans;

use App\Filament\Resources\Surat\SuratPengajuans\Pages\CreateSuratPengajuan;
use App\Filament\Resources\Surat\SuratPengajuans\Pages\EditSuratPengajuan;
use App\Filament\Resources\Surat\SuratPengajuans\Pages\ListSuratPengajuans;
use App\Filament\Resources\Surat\SuratPengajuans\Schemas\SuratPengajuanForm;
use App\Filament\Resources\Surat\SuratPengajuans\Tables\SuratPengajuansTable;
use App\Models\SuratPengajuan;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SuratPengajuanResource extends Resource
{
    protected static ?string $model = SuratPengajuan::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;


    protected static ?string $recordTitleAttribute = 'SuratPengajuan';

    protected static string | UnitEnum|null $navigationGroup = 'Surat';

    public static function form(Schema $schema): Schema
    {
        return SuratPengajuanForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SuratPengajuansTable::configure($table);
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
            'index' => ListSuratPengajuans::route('/'),
            'create' => CreateSuratPengajuan::route('/create'),
            'edit' => EditSuratPengajuan::route('/{record}/edit'),
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
