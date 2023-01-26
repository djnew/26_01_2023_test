<?php

namespace App\Repositories\Base;

use App\Models\Base\IUserContractType;
use App\Models\DTO\UserContractTypeDTO;
use Illuminate\Support\Collection;

interface IUserContractTypesRepository
{
    public function index(array $filter): Collection;

    public function show(int $id): IUserContractType;

    public function create(UserContractTypeDTO $fields): IUserContractType;

    public function update(UserContractTypeDTO $fields): IUserContractType;

    public function remove(int $id): IUserContractType;
}
