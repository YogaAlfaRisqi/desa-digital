<?php

namespace App\Filament\Resources\Surat\SuratTemplates\Pages;

use App\Filament\Resources\Surat\SuratTemplates\SuratTemplateResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSuratTemplates extends ListRecords
{
    protected static string $resource = SuratTemplateResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
