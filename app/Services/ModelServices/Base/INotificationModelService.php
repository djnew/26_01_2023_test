<?php

namespace App\Services\ModelServices\Base;

use App\Models\Base\INotification;
use App\Models\DTO\NotificationDTO;

interface INotificationModelService
{
    public function createNotification(NotificationDTO $dto): INotification;

    public function getNotificationById(int $id): INotification;

}
