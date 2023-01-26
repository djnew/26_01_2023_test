<?php

namespace App\Repositories;

use App\Models\Base\IUserContractType;
use App\Models\DTO\UserContractTypeDTO;
use App\Models\UserContact;
use App\Repositories\Base\IUserContractTypesRepository;
use Illuminate\Support\Collection;

class UserContactTypesRepository implements IUserContractTypesRepository
{
    public function __construct(
        private readonly UserContact $model
    )
    {
    }

    public function index(array $filter): Collection
    {
        // TODO: Implement index() method.
    }

    public function show(int $id): IUserContractType
    {
        // TODO: Implement show() method.
    }

    public function create(UserContractTypeDTO $fields): IUserContractType
    {
        // TODO: Implement create() method.
    }

    public function update(UserContractTypeDTO $fields): IUserContractType
    {
        // TODO: Implement update() method.
    }

    public function remove(int $id): IUserContractType
    {
        // TODO: Implement remove() method.
    }
}
