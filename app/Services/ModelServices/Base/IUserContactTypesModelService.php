<?php

namespace App\Services\ModelServices\Base;

use App\Models\Base\IUserContractType;
use App\Models\Base\IUserSettingType;
use App\Models\DTO\UserContractTypeDTO;
use App\Models\DTO\UserSettingsTypeDTO;
use Ramsey\Collection\Collection;

interface IUserContactTypesModelService
{
    /**
     * @param array $filter
     * @return Collection<IUserContractType>
     */
    public function getUserSettingTypes(array $filter): Collection;

    public function getUserSettingTypeById(int $id): IUserContractType;

    public function createUserSettingType(UserContractTypeDTO $dto): IUserContractType;

    public function updateUserSettingType(UserContractTypeDTO $dto): IUserContractType;

    public function deleteUserSettingType(UserContractTypeDTO $dto): IUserContractType;
}
