<?php

namespace App\Filament\Resources\Surat\SuratTerbits\Pages;

use App\Filament\Resources\Surat\SuratTerbits\SuratTerbitResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Resources\Pages\EditRecord;

class EditSuratTerbit extends EditRecord
{
    protected static string $resource = SuratTerbitResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }
}
