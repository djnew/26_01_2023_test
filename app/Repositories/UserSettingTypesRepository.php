<?php

namespace App\Repositories;

use App\Models\Base\IUserSettingType;
use App\Models\DTO\UserSettingsTypeDTO;
use App\Models\UserSettingType;
use App\Repositories\Base\IUserSettingTypesRepository;
use Illuminate\Support\Collection;

class UserSettingTypesRepository implements IUserSettingTypesRepository
{
    public function __construct(
        private readonly UserSettingType $model,
    )
    {
    }

    public function index(array $filter): Collection
    {
        // TODO: Implement index() method.
    }

    public function show(int $id): IUserSettingType
    {
        // TODO: Implement show() method.
    }

    public function create(UserSettingsTypeDTO $fields): IUserSettingType
    {
        // TODO: Implement create() method.
    }

    public function update(UserSettingsTypeDTO $fields): IUserSettingType
    {
        // TODO: Implement update() method.
    }

    public function remove(int $id): IUserSettingType
    {
        // TODO: Implement remove() method.
    }
}
