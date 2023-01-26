<?php

namespace App\Http\Controllers;

use App\Http\Collections\UsersCollection;
use App\Http\Requests\UpdateUserRequest;
use App\Services\ModelServices\Base\IUsersModelService;

class UserController extends Controller
{
    public function __construct(
        private readonly IUsersModelService $service
    )
    {
    }

    public function updateUser(UpdateUserRequest $request): UsersCollection
    {
        return new UsersCollection($this->service->updateUser($request->toDto()));
    }
}
