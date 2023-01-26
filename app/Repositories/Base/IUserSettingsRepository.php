<?php

namespace App\Repositories\Base;

use App\Models\Base\IUserContractType;
use App\Models\Base\IUserSetting;
use App\Models\DTO\UserSettingDTO;
use Illuminate\Support\Collection;

interface IUserSettingsRepository
{
    public function index(array $filter): Collection;

    public function show(int $id): IUserContractType;

    public function create(UserSettingDTO $fields): IUserSetting;

    public function update(UserSettingDTO $fields): IUserSetting;

    public function remove(int $id): IUserSetting;
}
