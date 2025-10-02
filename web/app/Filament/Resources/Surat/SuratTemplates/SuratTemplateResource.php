<?php

namespace App\Filament\Resources\Surat\SuratTemplates;

use App\Filament\Resources\Surat\SuratTemplates\Pages\CreateSuratTemplate;
use App\Filament\Resources\Surat\SuratTemplates\Pages\EditSuratTemplate;
use App\Filament\Resources\Surat\SuratTemplates\Pages\ListSuratTemplates;
use App\Filament\Resources\Surat\SuratTemplates\Schemas\SuratTemplateForm;
use App\Filament\Resources\Surat\SuratTemplates\Tables\SuratTemplatesTable;
use App\Models\SuratTemplate;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SuratTemplateResource extends Resource
{
    protected static ?string $model = SuratTemplate::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'SuratTemplate';

    protected static string | UnitEnum|null $navigationGroup = 'Surat';

    public static function form(Schema $schema): Schema
    {
        return SuratTemplateForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SuratTemplatesTable::configure($table);
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
            'index' => ListSuratTemplates::route('/'),
            'create' => CreateSuratTemplate::route('/create'),
            'edit' => EditSuratTemplate::route('/{record}/edit'),
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
