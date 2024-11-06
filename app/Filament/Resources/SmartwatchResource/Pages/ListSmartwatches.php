<?php

namespace App\Filament\Resources\SmartwatchResource\Pages;

use App\Filament\Resources\SmartwatchResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSmartwatches extends ListRecords
{
    protected static string $resource = SmartwatchResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
