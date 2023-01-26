<?php

namespace App\Repositories\Base;

use App\Models\Base\IUserContact;
use App\Models\DTO\UserContactDTO;
use Illuminate\Support\Collection;

interface IUserContactsRepository
{
    public function index(array $filter): Collection;

    public function show(int $id): IUserContact;

    public function create(UserContactDTO $fields): IUserContact;

    public function update(UserContactDTO $fields): IUserContact;

    public function remove(int $id): IUserContact;
}
