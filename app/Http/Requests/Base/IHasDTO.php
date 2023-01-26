<?php

namespace App\Http\Requests\Base;

use App\Base\IDTO;

interface IHasDTO
{
    public function toDTO(): IDTO;
}
