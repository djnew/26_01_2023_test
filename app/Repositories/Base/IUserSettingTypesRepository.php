<?php

namespace App\Repositories\Base;

use App\Models\Base\IUserSettingType;
use App\Models\DTO\UserSettingsTypeDTO;
use Illuminate\Support\Collection;

interface IUserSettingTypesRepository
{
    public function index(array $filter): Collection;

    public function show(int $id): IUserSettingType;

    public function create(UserSettingsTypeDTO $fields): IUserSettingType;

    public function update(UserSettingsTypeDTO $fields): IUserSettingType;

    public function remove(int $id): IUserSettingType;
}
