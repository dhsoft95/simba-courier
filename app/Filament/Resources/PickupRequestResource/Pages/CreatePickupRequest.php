<?php

namespace App\Filament\Resources\PickupRequestResource\Pages;

use App\Filament\Resources\PickupRequestResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreatePickupRequest extends CreateRecord
{
    protected static string $resource = PickupRequestResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Pickup request created')
            ->body('The pickup request has been created successfully.');
    }
}
