<?php

namespace App\Filament\Resources\Surat\SuratTerbits\Pages;

use App\Filament\Resources\Surat\SuratTerbits\SuratTerbitResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSuratTerbits extends ListRecords
{
    protected static string $resource = SuratTerbitResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
