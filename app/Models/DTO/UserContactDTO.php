<?php

namespace App\Models\DTO;

use App\Base\IDTO;

class UserContactDTO implements IDTO
{
    public function __construct(
        public readonly ?int $id,
        public readonly int $user_id,
        public readonly bool $verified,
        public readonly int $user_contact_type_id,
        public readonly string $value,
    ){}
}
