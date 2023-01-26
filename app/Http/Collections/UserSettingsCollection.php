<?php

namespace App\Http\Collections;

use App\Http\Resources\UserSettingResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class UserSettingsCollection extends ResourceCollection
{
    public $collection = UserSettingResource::class;

    public function toArray($request)
    {
        return $this->collection;
    }
}
