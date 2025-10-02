<?php

namespace App\Filament\Resources\Surat\SuratTemplates\Schemas;

use Filament\Actions\SelectAction;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SuratTemplateForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Name')
                    ->required()
                    ->maxLength(255),

                RichEditor::make('isi')
                    ->label('Isi')
                    ->toolbarButtons([
                        'bold',
                        'italic',
                        'underline',
                        'strike',
                        'bulletList',
                        'orderedList',
                        'link',
                        'codeBlock',
                        'blockquote',
                    ])

                    ->required(),
                SelectAction::make('category')
                    ->label('Category')
                    ->options([
                        'official' => 'Official',
                        'personal' => 'Personal',
                        'business' => 'Business',
                    ]),
            ]);
    }
}
