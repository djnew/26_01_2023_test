<?php

namespace App\Http\Requests\Base;

use App\Base\IDTO;
use Illuminate\Support\Collection;

interface IHasCollectionDTO
{
    /**
     * @return Collection<IDTO>
     */
    public function toDTO(): Collection;
}
