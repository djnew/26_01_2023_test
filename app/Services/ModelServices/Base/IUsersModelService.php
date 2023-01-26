<?php

namespace App\Services\ModelServices\Base;

use App\Models\Base\IUser;
use App\Models\DTO\UserDTO;
use Illuminate\Database\Eloquent\Collection;

interface IUsersModelService
{

    /**
     * @param array $filters
     * @return Collection<IUser>
     */
    public function getUsers(array $filters): Collection;

    public function getUser(int $id): IUser;

    public function updateUser(UserDTO $dto): IUser;

    public function createUser(UserDTO $dto): IUser;

    public function deleteUser(int $id): IUser;

    public function changeMainContact(int $id, int $contactId): IUser;
}
