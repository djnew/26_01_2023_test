<?php

namespace App\Models\DTO;

use App\Base\IDTO;

class UserDTO implements IDTO
{
    public function __construct(
        public readonly ?int $id,
        public readonly string $name,
        public readonly ?string $password,
        public readonly int $contact_id
    ){}
}
