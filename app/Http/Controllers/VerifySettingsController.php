<?php

namespace App\Http\Controllers;

use App\Http\Requests\VerifySettingsRequest;
use App\Services\Base\IVerifyUserParamsService;

class VerifySettingsController extends Controller
{
    public function __construct(
        private readonly IVerifyUserParamsService $service
    ){

    }
    public function verifySettings(VerifySettingsRequest $request){
        return $this->service->verifySettings($request->toDTO());
    }
}
