<?php

namespace App\Repositories;

use App\Models\Base\IUserContractType;
use App\Models\Base\IUserSetting;
use App\Models\DTO\UserSettingDTO;
use App\Models\UserSetting;
use App\Repositories\Base\IUserSettingsRepository;
use Illuminate\Support\Collection;

class UserSettingsRepository implements IUserSettingsRepository
{
    public function __construct(
        private readonly UserSetting $model,
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

    public function create(UserSettingDTO $fields): IUserSetting
    {
        // TODO: Implement create() method.
    }

    public function update(UserSettingDTO $fields): IUserSetting
    {
        // TODO: Implement update() method.
    }

    public function remove(int $id): IUserSetting
    {
        // TODO: Implement remove() method.
    }
}
