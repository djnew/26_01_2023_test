<?php

namespace App\Services\ModelServices;

use App\Models\Base\IUserSetting;
use App\Models\DTO\UserSettingDTO;
use App\Repositories\Base\IUserSettingsRepository;
use App\Services\ModelServices\Base\IUserSettingsModelService;
use Illuminate\Support\Collection;

class UserSettingsModelService implements IUserSettingsModelService
{

    public function __construct(
        private readonly IUserSettingsRepository $repository
    )
    {

    }
    /**
     * @param int $userId
     * @return Collection
     */
    public function getUserSettings(int $userId): Collection
    {
        // TODO: Implement getUserSettings() method.
    }

    /**
     * @param Collection<UserSettingDTO> $settingDto
     * @return Collection<IUserSetting>
     */
    public function setUserSettings(Collection $settingDto): Collection
    {
        /**
         * Кидаем эвент изменения настро
         */
        // TODO: Implement setUserSettings() method.
    }
}
