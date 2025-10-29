<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        // Convert comma-separated customer_id to array for the form
        if (!empty($data['customer_id'])) {
            $data['customer_ids'] = explode(',', $data['customer_id']);
        } else {
            $data['customer_ids'] = [];
        }

        return $data;
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        // Convert array of customer IDs back to comma-separated string
        if (isset($data['customer_ids']) && is_array($data['customer_ids'])) {
            $data['customer_id'] = implode(',', $data['customer_ids']);
            unset($data['customer_ids']);
        }

        return $data;
    }

}
