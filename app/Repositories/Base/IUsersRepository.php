<?php

namespace App\Repositories\Base;

use App\Models\Base\IUser;
use App\Models\DTO\UserDTO;
use Illuminate\Support\Collection;

interface IUsersRepository
{
    public function index(array $filter): Collection;

    public function show(int $id): IUser;

    public function create(UserDTO $fields): IUser;

    public function update(UserDTO $fields): IUser;

    public function remove(int $id): IUser;
}
