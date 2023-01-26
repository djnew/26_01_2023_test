<?php

namespace App\Services\ModelServices;

use App\Models\Base\IUserContractType;
use App\Models\DTO\UserContractTypeDTO;
use App\Repositories\Base\IUserContractTypesRepository;
use App\Services\ModelServices\Base\IUserContactTypesModelService;
use Ramsey\Collection\Collection;

class UserContactTypesModelService implements IUserContactTypesModelService
{
    public function __construct(
        private readonly IUserContractTypesRepository $repository
    )
    {

    }
    public function getUserSettingTypes(array $filter): Collection
    {
        // TODO: Implement getUserSettingTypes() method.
    }

    public function getUserSettingTypeById(int $id): IUserContractType
    {
        // TODO: Implement getUserSettingTypeById() method.
    }

    public function createUserSettingType(UserContractTypeDTO $dto): IUserContractType
    {
        // TODO: Implement createUserSettingType() method.
    }

    public function updateUserSettingType(UserContractTypeDTO $dto): IUserContractType
    {
        // TODO: Implement updateUserSettingType() method.
    }

    public function deleteUserSettingType(UserContractTypeDTO $dto): IUserContractType
    {
        // TODO: Implement deleteUserSettingType() method.
    }
}
