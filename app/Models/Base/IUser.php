<?php

namespace App\Models\Base;

use Illuminate\Support\Carbon;

/**
 * @property int         $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string      $name
 * @property string      $email
 * @property int         $user_contact_id
 * @method array|null|string isDirty($attributes)
 *
 */
interface IUser
{
}
