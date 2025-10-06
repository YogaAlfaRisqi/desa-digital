<?php

namespace App\Filament\Resources\ArticlesCategories\Pages;

use App\Filament\Resources\ArticlesCategories\ArticlesCategoryResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListArticlesCategories extends ListRecords
{
    protected static string $resource = ArticlesCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
