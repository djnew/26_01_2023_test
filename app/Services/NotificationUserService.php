<?php

namespace App\Services;

use App\Services\Base\INotificationUserService;
use App\Services\ModelServices\NotificationModelService;
use App\Services\Notifications\NotificationFactory;

class NotificationUserService implements INotificationUserService
{
    public function __construct(
        private readonly INotificationModelService $notificationModelService,
        private readonly IUserModelService $userModelService
    ){

    }

    public function notificationUser(int $userId, int $notificationId): bool
    {
        /**
         * Получение пользователя по ID,
         * получение основного контакта по пользователю
         * из фабрики NotificationFactory получаем класс нотификатора,
         * вызываем нотификацию
         */
    }
}
