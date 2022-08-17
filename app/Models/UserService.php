<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserService extends Model
{
    use HasFactory;
    protected $fillable = [
        'User_id',
        'Service_id',
        'Start_date',
        'Exp_date',
        'uuid'
    ];
}
