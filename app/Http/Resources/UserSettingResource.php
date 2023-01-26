<?php

namespace App\Http\Resources;

use App\Models\Base\IUserSetting;

class UserSettingResource
{
    public function toArray($request): array
    {
        /** @var IUserSetting $model */
        $model = $this;
        return [
            ...
        ];
    }
}
