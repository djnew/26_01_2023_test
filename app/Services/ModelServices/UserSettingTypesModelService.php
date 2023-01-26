<?php

namespace App\Services\ModelServices;

use App\Models\Base\IUserSettingType;
use App\Models\DTO\UserSettingsTypeDTO;
use App\Repositories\Base\IUserSettingTypesRepository;
use App\Services\ModelServices\Base\IUserSettingTypesModelService;
use Illuminate\Support\Collection;

class UserSettingTypesModelService implements IUserSettingTypesModelService
{
    public function __construct(
        private readonly IUserSettingTypesRepository $repository
    )
    {

    }
    public function getUserSettingTypes(array $filter): Collection
    {
        // TODO: Implement getUserSettingTypes() method.
    }

    public function getUserSettingTypeById(int $id): IUserSettingType
    {
        // TODO: Implement getUserSettingTypeById() method.
    }

    public function createUserSettingType(UserSettingsTypeDTO $dto): IUserSettingType
    {
        // TODO: Implement createUserSettingType() method.
    }

    public function updateUserSettingType(UserSettingsTypeDTO $dto): IUserSettingType
    {
        // TODO: Implement updateUserSettingType() method.
    }

    public function deleteUserSettingType(UserSettingsTypeDTO $dto): IUserSettingType
    {
        // TODO: Implement deleteUserSettingType() method.
    }
}
