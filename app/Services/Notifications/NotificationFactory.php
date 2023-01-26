<?php

namespace App\Services\Notifications;

use App\Models\Base\IUserContact;
use App\Services\Notifications\Base\IUserNotificationHandler;

class NotificationFactory
{
    public static function make(IUserContact $contact): IUserNotificationHandler
    {
        /**
         * По контакту выбираем нотификатор (полное имя класса хранится в базе), возврашаем нотификатор
         */
    }
}
