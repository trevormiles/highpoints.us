<?php

declare(strict_types=1);

namespace App\Filament\Resources\HighpointResource\Pages;

use App\Filament\Resources\HighpointResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

final class EditHighpoint extends EditRecord
{
    protected static string $resource = HighpointResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
} 