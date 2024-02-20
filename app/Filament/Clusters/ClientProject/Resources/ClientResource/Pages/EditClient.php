<?php

namespace App\Filament\Clusters\ClientProject\Resources\ClientResource\Pages;

use App\Filament\Clusters\ClientProject\Resources\ClientResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditClient extends EditRecord
{
    protected static string $resource = ClientResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
