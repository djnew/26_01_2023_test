<?php

namespace App\Repositories;

use App\Models\Base\IUserContact;
use App\Models\DTO\UserContactDTO;
use App\Models\UserContact;
use App\Repositories\Base\IUserContactsRepository;
use Illuminate\Support\Collection;

class UserContactsRepository implements IUserContactsRepository
{

    /**
     * Доступ через модель до данных базы в реализации с Laravel,
     * можно подменить через DI
     *
     * @param UserContact $model
     */
    public function __construct(
        private readonly UserContact $model
    ){}

    public function index(array $filter): Collection
    {
        // TODO: Implement index() method.
    }

    public function show(int $id): IUserContact
    {
        // TODO: Implement show() method.
    }

    public function create(UserContactDTO $fields): IUserContact
    {
        // TODO: Implement create() method.
    }

    public function update(UserContactDTO $fields): IUserContact
    {
        // TODO: Implement update() method.
    }

    public function remove(int $id): IUserContact
    {
        // TODO: Implement remove() method.
    }
}
