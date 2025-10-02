<?php

namespace App\Filament\Resources\Surat\SuratPengajuans\Pages;

use App\Filament\Resources\Surat\SuratPengajuans\SuratPengajuanResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Resources\Pages\EditRecord;

class EditSuratPengajuan extends EditRecord
{
    protected static string $resource = SuratPengajuanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }
}
