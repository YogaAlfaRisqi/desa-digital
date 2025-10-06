<?php

namespace App\Filament\Resources\ArticlesCategories;

use App\Filament\Resources\ArticlesCategories\Pages\CreateArticlesCategory;
use App\Filament\Resources\ArticlesCategories\Pages\EditArticlesCategory;
use App\Filament\Resources\ArticlesCategories\Pages\ListArticlesCategories;
use App\Filament\Resources\ArticlesCategories\Schemas\ArticlesCategoryForm;
use App\Filament\Resources\ArticlesCategories\Tables\ArticlesCategoriesTable;

use App\Models\Category;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ArticlesCategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Category';

    protected static string | UnitEnum|null $navigationGroup = 'Articles Management';

    public static function form(Schema $schema): Schema
    {
        return ArticlesCategoryForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ArticlesCategoriesTable::configure($table);
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
            'index' => ListArticlesCategories::route('/'),
            'create' => CreateArticlesCategory::route('/create'),
            'edit' => EditArticlesCategory::route('/{record}/edit'),
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
