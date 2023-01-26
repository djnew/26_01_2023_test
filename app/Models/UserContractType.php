<?php

namespace App\Models;

use App\Models\Base\IUserContractType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserContractType extends Model implements IUserContractType
{
    use HasFactory;
}
