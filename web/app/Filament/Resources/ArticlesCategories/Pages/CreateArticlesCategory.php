<?php

namespace App\Filament\Resources\ArticlesCategories\Pages;

use App\Filament\Resources\ArticlesCategories\ArticlesCategoryResource;
use Filament\Resources\Pages\CreateRecord;

class CreateArticlesCategory extends CreateRecord
{
    protected static string $resource = ArticlesCategoryResource::class;
}
