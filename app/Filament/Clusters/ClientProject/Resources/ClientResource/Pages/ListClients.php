<?php

namespace App\Filament\Clusters\ClientProject\Resources\ClientResource\Pages;

use App\Filament\Clusters\ClientProject\Resources\ClientResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListClients extends ListRecords
{
    protected static string $resource = ClientResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
