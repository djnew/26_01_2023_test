<?php

namespace App\Services\Base;

use App\Services\DTO\VerificationUserParamsDTO;

interface IVerifyUserParamsService
{
    public function verifySettings(VerificationUserParamsDTO $dto): bool;
}
