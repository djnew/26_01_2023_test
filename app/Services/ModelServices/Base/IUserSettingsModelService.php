<?php

namespace App\Services\ModelServices\Base;

use App\Models\Base\IUserSetting;
use App\Models\DTO\UserSettingDTO;
use Illuminate\Support\Collection;

interface IUserSettingsModelService
{
    /**
     * Получение настроек пользователя
     *
     * @param int $userId
     * @return Collection<IUserSetting>
     */
    public function getUserSettings(int $userId): Collection;

    /**
     * Добавление новой настройки пользователя
     *
     * @param Collection<UserSettingDTO> $user
     * @return Collection<IUserSetting>
     */
    public function setUserSettings(Collection $settingDto): Collection;
}
