<?php

namespace App\Services\Notifications\Base;

use App\Models\Base\INotification;
use App\Models\Base\IUser;

interface IUserNotificationHandler
{
    public function notify(IUser $user, INotification $notification): bool;
}
