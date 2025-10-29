<?php

namespace App\Filament\Resources\PickupRequestResource\Pages;

use App\Filament\Resources\PickupRequestResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;

class EditPickupRequest extends EditRecord
{
    protected static string $resource = PickupRequestResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getSavedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Pickup request updated')
            ->body('The pickup request has been updated successfully.');
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
