<?php

namespace App\Filament\Resources\GuestResource\Pages;

use App\Filament\Resources\GuestResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Konnco\FilamentImport\Actions\ImportField;
use Konnco\FilamentImport\Actions\ImportAction;

class ListGuests extends ListRecords
{
    protected static string $resource = GuestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            ImportAction::make()
                ->uniqueField('username')
                ->fields([
                    ImportField::make('name')
                        ->required(),
                    ImportField::make('username')
                        ->required(),
                    ImportField::make('institute')
                        ->required(),
                ]),
        ];
    }
}
