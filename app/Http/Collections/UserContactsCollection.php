<?php

namespace App\Http\Collections;

use App\Http\Resources\UserContactResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class UserContactsCollection extends ResourceCollection
{
    public $collection = UserContactResource::class;

    public function toArray($request)
    {
        return $this->collection;
    }
}
