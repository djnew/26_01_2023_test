<?php

namespace App\Models\Base;

use Illuminate\Support\Carbon;

/**
 * @property int         $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int         $user_id
 * @property boolean     $verified
 * @property int         $user_setting_type_id
 * @property string      $value
 * @method array|null|string isDirty($attributes)
 */
interface IUserSetting
{

}
