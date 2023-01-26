<?php

namespace App\Services\DTO;

use App\Base\IDTO;

class VerificationUserParamsDTO implements IDTO
{
    public function __construct(
        private readonly int $userId,
        private readonly string $code
    ){}
}
