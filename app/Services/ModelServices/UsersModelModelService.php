<?php

namespace App\Services\ModelServices;

use App\Models\Base\IUser;
use App\Models\DTO\UserDTO;
use App\Repositories\Base\IUsersRepository;
use App\Services\ModelServices\Base\IUsersModelService;
use Illuminate\Database\Eloquent\Collection;

class UsersModelModelService implements IUsersModelService
{
    public function __construct(
        private readonly IUsersRepository $usersRepository
    ){}

    public function getUsers(array $filters): Collection
    {
        // TODO: Implement getUsers() method.
    }

    public function getUser(int $id): IUser
    {
        // TODO: Implement getUser() method.
    }

    public function updateUser(UserDTO $dto): IUser
    {
        // TODO: Implement updateUser() method.
    }

    public function createUser(UserDTO $dto): IUser
    {
        // TODO: Implement createUser() method.
    }

    public function deleteUser(int $id): IUser
    {
        // TODO: Implement deleteUser() method.
    }

    public function changeMainContact(int $id, int $contactId): IUser
    {
        // TODO: Implement changeMainContact() method.
    }
}
