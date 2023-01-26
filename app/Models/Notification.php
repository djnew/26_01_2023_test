<?php

namespace App\Models;

use App\Models\Base\INotification;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model implements INotification
{
    use HasFactory;
}
