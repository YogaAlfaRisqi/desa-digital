<?php

namespace App\Filament\Resources\ArticlesCategories\Pages;

use App\Filament\Resources\ArticlesCategories\ArticlesCategoryResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Resources\Pages\EditRecord;

class EditArticlesCategory extends EditRecord
{
    protected static string $resource = ArticlesCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }
}
