<?php

namespace App\Models\DTO;

use App\Base\IDTO;

class UserContractTypeDTO implements IDTO
{
    public function __construct(
        public readonly ?int   $id,
        public readonly string $name,
        public bool            $enabled
    )
    {
    }
}
