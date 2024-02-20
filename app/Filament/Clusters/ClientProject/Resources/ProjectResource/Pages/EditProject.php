<?php

namespace App\Filament\Clusters\ClientProject\Resources\ProjectResource\Pages;

use App\Filament\Clusters\ClientProject\Resources\ProjectResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProject extends EditRecord
{
    protected static string $resource = ProjectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
