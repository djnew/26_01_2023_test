<?php

namespace App\Repositories;

use App\Models\Base\INotification;
use App\Models\DTO\NotificationDTO;
use App\Models\Notification;
use App\Repositories\Base\INotificationsRepository;
use Illuminate\Support\Collection;

class NotificationsRepository implements INotificationsRepository
{
    public function __construct(
        private readonly Notification $model,
    )
    {
    }

    public function index(array $filter): Collection
    {
        // TODO: Implement index() method.
    }

    public function show(int $id): INotification
    {
        // TODO: Implement show() method.
    }

    public function create(NotificationDTO $fields): INotification
    {
        // TODO: Implement create() method.
    }

    public function update(NotificationDTO $fields): INotification
    {
        // TODO: Implement update() method.
    }

    public function remove(int $id): INotification
    {
        // TODO: Implement remove() method.
    }
}
