<?php

namespace App\Services\Notifications;

use App\Models\Base\INotification;
use App\Models\Base\IUser;
use App\Services\Notifications\Base\IUserNotificationHandler;

class TelegramUserNotificationHandler implements IUserNotificationHandler
{

    public function notify(IUser $user, INotification $notification): bool
    {
        // TODO: Implement notify() method.
    }
}
