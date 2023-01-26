<?php

namespace App\Repositories;

use App\Models\Base\IUser;
use App\Models\DTO\UserDTO;
use App\Models\User;
use App\Repositories\Base\IUsersRepository;
use App\Repositories\Base\UserContactDTO;
use Illuminate\Support\Collection;

class UsersRepository implements IUsersRepository
{
    /**
     * Доступ через модель до данных базы в реализации с Laravel,
     * можно подменить через DI
     *
     * @param User $model
     */
    public function __construct(
        private readonly User $model,
    )
    {
    }

    public function index(array $filter): Collection
    {
        // TODO: Implement index() method.
    }

    public function show(int $id): IUser
    {
        // TODO: Implement show() method.
    }

    public function create(UserDTO $fields): IUser
    {
        // TODO: Implement create() method.
    }

    public function update(UserDTO $fields): IUser
    {
        // TODO: Implement update() method.
    }

    public function remove(int $id): IUser
    {
        // TODO: Implement remove() method.
    }
}
