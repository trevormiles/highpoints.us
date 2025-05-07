<?php

declare(strict_types=1);

namespace App\Filament\Resources\HighpointResource\Pages;

use App\Filament\Resources\HighpointResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

final class ListHighpoints extends ListRecords
{
    protected static string $resource = HighpointResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
} 