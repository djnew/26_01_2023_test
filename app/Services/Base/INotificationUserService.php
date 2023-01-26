<?php

namespace App\Services\Base;

interface INotificationUserService
{
    public function notificationUser(int $userId, int $notificationId): bool;
}
