<?php

namespace App\Services;

use App\Services\Base\IVerifyUserParamsService;
use App\Services\DTO\VerificationUserParamsDTO;
use App\Services\ModelServices\Base\INotificationModelService;
use App\Services\ModelServices\Base\IUserSettingsModelService;
use App\Services\ModelServices\Base\IUsersModelService;

class VerifyUserParamsService implements IVerifyUserParamsService
{

    public function __construct(
        private readonly INotificationModelService $notificationModelService,
        private readonly IUsersModelService $usersModelService,
        private readonly IUserSettingsModelService $userSettingsModelService
    )
    {

    }

    public function verifySettings(VerificationUserParamsDTO $dto): bool
    {
        /**
         * Получаем из dto ID пользователя, код,
         * проверяем существует ли нотификация с такими параметрами
         * меняем у параметров пользователя флаг проверки если всё верно
         */
    }
}
