<?php

namespace App\Models;

use App\Models\Base\IUserSetting;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSetting extends Model implements IUserSetting
{
    use HasFactory;
}
