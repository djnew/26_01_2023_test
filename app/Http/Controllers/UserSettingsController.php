<?php

namespace App\Http\Controllers;

use App\Http\Collections\UserSettingsCollection;
use App\Http\Requests\UserChangeSettingsRequest;
use App\Services\ModelServices\Base\IUserSettingsModelService;

class UserSettingsController extends Controller
{
    public function __construct(
        private readonly IUserSettingsModelService $modelService
    )
    {
    }

    public function changeSetting(UserChangeSettingsRequest $request)
    {
        return new UserSettingsCollection($this->modelService->setUserSettings($request->toDTO()));
    }
}
