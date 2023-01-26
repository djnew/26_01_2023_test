<?php

namespace App\Services\ModelServices;

use App\Models\Base\IUserContact;
use App\Models\DTO\UserContactDTO;
use App\Repositories\Base\IUserContactsRepository;
use App\Services\ModelServices\Base\IUserContactsModelService;
use Illuminate\Support\Collection;

class UserContactsModelService implements IUserContactsModelService
{
    public function __construct(
        private readonly IUserContactsRepository $repository
    ){}


    public function createContact(UserContactDTO $dto): Collection
    {
        // TODO: Implement createContact() method.
    }

    public function getContactsByUserId(int $userId): Collection
    {
        // TODO: Implement getContactsByUserId() method.
    }

    public function getContact(int $id): IUserContact
    {
        // TODO: Implement getContact() method.
    }

    public function verifyContact(int $id): IUserContact
    {
        // TODO: Implement verifyContact() method.
    }

    public function updateContact(IUserContact $contact): Collection
    {
        // TODO: Implement updateContact() method.
    }
}
