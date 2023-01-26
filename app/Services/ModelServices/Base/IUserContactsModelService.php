<?php

namespace App\Services\ModelServices\Base;

use App\Models\Base\IUserContact;
use App\Models\DTO\UserContactDTO;
use Illuminate\Support\Collection;

interface IUserContactsModelService
{
    /**
     * @param UserContactDTO $dto
     * @return Collection<IUserContact>
     */
    public function createContact(UserContactDTO $dto): Collection;

    /**
     * @param int $userId
     * @return Collection<IUserContact>
     */
    public function getContactsByUserId(int $userId): Collection;

    public function updateContact(IUserContact $contact): Collection;

    public function getContact(int $id): IUserContact;

    public function verifyContact(int $id): IUserContact;
}
