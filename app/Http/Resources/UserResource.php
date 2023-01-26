<?php

namespace App\Http\Resources;

use App\Models\Base\IUserSetting;

class UserResource
{
    public function toArray($request): array
    {
        /** @var IUser $model */
        $model = $this;
        return [
            ...
        ];
    }
}
