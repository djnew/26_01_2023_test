<?php

namespace App\Http\Collections;

use App\Http\Resources\UserResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class UsersCollection extends ResourceCollection
{
    public $collection = UserResource::class;

    public function toArray($request)
    {
        return $this->collection;
    }
}
