<?php

namespace App\Models\DTO;

use App\Base\IDTO;

class NotificationDTO implements IDTO
{
    public function __construct(
        public readonly ?int $id,
        public readonly int $user_id,
        public readonly int $contact_id,
        public readonly string $code,
    ){}
}
