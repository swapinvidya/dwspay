<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\RecordsActivity;

class userDetail extends Model
{
    use HasFactory;
    use RecordsActivity;
    protected $fillable = [
        "user_id",
        "mobile",
        "address",
        "location"
    ];

    
   
}