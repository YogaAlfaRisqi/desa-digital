<?php

namespace App\Filament\Resources\Surat\SuratPengajuans\Pages;

use App\Filament\Resources\Surat\SuratPengajuans\SuratPengajuanResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSuratPengajuans extends ListRecords
{
    protected static string $resource = SuratPengajuanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
