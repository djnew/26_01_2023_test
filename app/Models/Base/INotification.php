<?php

namespace App\Models\Base;

use Illuminate\Support\Carbon;

/**
 * @property int         $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int         $user_id
 * @property int         $contact_id
 * @property string      $code
 */
interface INotification
{

}
