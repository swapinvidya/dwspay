<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\RecordsActivity;

class kyc extends Model
{
    use HasFactory;
    use RecordsActivity;
    protected $fillable = [
        'user_id',
        'profile_pic',
        'kyc_confirmed',
        'kyc_adahar',
        'kyc_pan',
        'kyc_other'
    ];
}
