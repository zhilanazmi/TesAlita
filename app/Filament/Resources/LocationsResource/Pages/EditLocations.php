<?php

namespace App\Filament\Resources\LocationsResource\Pages;

use App\Filament\Resources\LocationsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLocations extends EditRecord
{
    protected static string $resource = LocationsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
