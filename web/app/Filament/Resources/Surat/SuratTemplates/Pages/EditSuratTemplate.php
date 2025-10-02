<?php

namespace App\Filament\Resources\Surat\SuratTemplates\Pages;

use App\Filament\Resources\Surat\SuratTemplates\SuratTemplateResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Resources\Pages\EditRecord;

class EditSuratTemplate extends EditRecord
{
    protected static string $resource = SuratTemplateResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }
}
