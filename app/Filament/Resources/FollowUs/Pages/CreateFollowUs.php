<?php

namespace App\Filament\Resources\FollowUs\Pages;

use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\FollowUs\FollowUsResource;
use App\Models\FollowUs;
use Filament\Notifications\Notification;

class CreateFollowUs extends CreateRecord
{
    protected static string $resource = FollowUsResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        if (FollowUs::count() >= 1) {
            Notification::make()
                ->title('Error')
                ->body('Only one FollowUs record is allowed.')
                ->danger()
                ->send();

            $this->halt(); // Prevent record creation
        }

        return $data;
    }
}
