<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userrole extends Model
{
    use HasFactory;

    protected $fillable = [
        'rolename',
        'create_superdist',
        'create_dist',
        'create_apipartner',
        'create_retailer',
        'no_superdist',
        'no_dist',
        'no_apipartner',
        'no_retailer',
    ];

    
}
