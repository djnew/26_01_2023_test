<?php

namespace App\Http\Controllers;

use App\Http\Collections\UserContactsCollection;
use App\Http\Requests\CreateUserContactRequest;
use App\Http\Requests\UpdateUserContactRequest;
use App\Services\ModelServices\Base\IUserContactsModelService;

class UserContactsController extends Controller
{
    public function __construct(
        private readonly IUserContactsModelService $service
    )
    {

    }
    public function addContact(CreateUserContactRequest $request)
    {
        return new UserContactsCollection($this->service->createContact($request->toDTO()));
    }

    public function updateContact(UpdateUserContactRequest $request)
    {
        return new UserContactsCollection($this->service->updateContact($request->toDTO()));
    }
}
