<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\RecordsActivity;

class receipt extends Model
{
    use HasFactory;
    use RecordsActivity;

    protected $fillable = [
        'user_id',
        'receipt_no',
        'file_location',
        'default',
        'taxable',
        'tax',
        'shipping',
        'shipping_rate',
        'discount',
        'discount_rate'
    ];
}
