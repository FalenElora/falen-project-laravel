<?php

namespace App\Filament\Resources\SmartwatchResource\Pages;

use App\Filament\Resources\SmartwatchResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSmartwatch extends EditRecord
{
    protected static string $resource = SmartwatchResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
