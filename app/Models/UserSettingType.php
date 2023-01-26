<?php

namespace App\Models;

use App\Models\Base\IUserSettingType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSettingType extends Model implements IUserSettingType
{
    use HasFactory;
}
