<?php

namespace App\Services\ModelServices\Base;

use App\Models\Base\IUserSettingType;
use App\Models\DTO\UserSettingsTypeDTO;
use Illuminate\Support\Collection;


interface IUserSettingTypesModelService
{

    /**
     * @param array $filter
     * @return Collection<IUserSettingType>
     */
    public function getUserSettingTypes(array $filter): Collection;

    public function getUserSettingTypeById(int $id): IUserSettingType;

    public function createUserSettingType(UserSettingsTypeDTO $dto): IUserSettingType;

    public function updateUserSettingType(UserSettingsTypeDTO $dto): IUserSettingType;

    public function deleteUserSettingType(UserSettingsTypeDTO $dto): IUserSettingType;

}
