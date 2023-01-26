<?php

namespace App\Http\Resources;

use App\Models\Base\IUserContact;
use App\Models\Base\IUserSetting;

class UserContactResource
{
    public function toArray($request): array
    {
        /** @var IUserContact $model */
        $model = $this;
        return [
            ...
        ];
    }
}
