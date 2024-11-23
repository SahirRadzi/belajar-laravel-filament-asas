<?php

namespace App\Filament\Resources\PostcodeResource\Pages;

use App\Filament\Resources\PostcodeResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewPostcode extends ViewRecord
{
    protected static string $resource = PostcodeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
