<?php

namespace App\Services\ModelServices;

use App\Models\Base\INotification;
use App\Models\DTO\NotificationDTO;
use App\Repositories\Base\INotificationsRepository;
use App\Services\ModelServices\Base\INotificationModelService;

class NotificationModelService implements INotificationModelService
{
    public function __construct(
        private readonly INotificationsRepository $repository
    )
    {

    }

    public function createNotification(NotificationDTO $dto): INotification
    {
        // TODO: Implement createNotification() method.
    }

    public function getNotificationById(int $id): INotification
    {
        // TODO: Implement getNotificationById() method.
    }
}
