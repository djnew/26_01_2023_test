<?php

namespace App\Repositories\Base;

use App\Models\Base\INotification;
use App\Models\DTO\NotificationDTO;
use Illuminate\Support\Collection;

interface INotificationsRepository
{
    public function index(array $filter): Collection;

    public function show(int $id): INotification;

    public function create(NotificationDTO $fields): INotification;

    public function update(NotificationDTO $fields): INotification;

    public function remove(int $id): INotification;
}
