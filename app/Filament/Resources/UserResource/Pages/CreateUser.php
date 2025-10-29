<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use App\Models\User;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('User created')
            ->body('The user has been created successfully.');
    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // Convert array of customer IDs to comma-separated string
        if (isset($data['customer_ids']) && is_array($data['customer_ids'])) {
            $data['customer_id'] = implode(',', $data['customer_ids']);
            unset($data['customer_ids']);
        }

        return $data;
    }
}
